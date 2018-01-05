<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;

use App\Http\Requests\ProductRequest;
use DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public $path_file = 'product';
    public $path_thumb = 'product/thumbnails';

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $product = Product::paginate($perPage);
        } else {
            $product = Product::paginate($perPage);
        }

        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::pluck('title', 'id');
        return view('admin.product.create', ['categories' => $categories, 'brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ProductRequest $request)
    {
        //$requestData = $request->all();
        if($request->hasFile('thumbnails')){
            $files = $request->file('thumbnails');

            $thumbnails = [];
            //handle file to save
            foreach ($files as $f){
                //handle name of img
                $name_not_ext = str_slug( strtolower( trim( pathinfo($f->getClientOriginalName(), PATHINFO_FILENAME) ) ) );
                $ext = $f->getClientOriginalExtension();//strtolower( trim( pathinfo($f->getClientOriginalName(), PATHINFO_EXTENSION) ) );
                $full_name = $name_not_ext . '-' . time() . '.' . $ext;

                //die(var_dump($full_name));
                if($f->storeAs($this->path_thumb, $full_name))
                    array_push( $thumbnails, $full_name);
            }

            $properties = [
                'name' => $request->get('name'),
                'slug' => str_slug( $request->get('slug') ),
                'info' => $request->get('info'),
                'description' => $request->get('description'),
                'status' => $request->get('status'),
                'thumbnails' => serialize($thumbnails),
                'price' => $request->get('price'),
                'brand_id' => $request->get('brand_id')
            ];
            //$requestData['slug'] = str_slug( $requestData['slug'] );
            //$requestData['thumbnails'] =  $thumbnails;

            $product = Product::create($properties);

            $product_category = $request->get('product_category');
            if( !empty($product_category) ){
                $newId = $product['id'];
                foreach ($product_category as $item){
                    DB::table('product_category')->insert([
                        'product_id' => $newId,
                        'category_id' => $item
                    ]);
                }
            }

            return redirect('admin/product')->with('flash_message', 'Product added!');

        } else {
            Session::flash('danger', 'File not selected');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        //$categories = Category::all();
        //$brands = Brand::pluck('title', 'id');

        return view('admin.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $brands = Brand::pluck('title', 'id');
        $product_category = DB::table('product_category')->where('product_id', $id)->pluck('category_id')->toArray();
        //die(var_dump($product_category));
        return view('admin.product.edit', ['product' => $product, 'categories' => $categories, 'brands' => $brands, 'product_category' => $product_category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ProductRequest $request, $id)
    {
        $requestData = $request->all();
        $product = Product::findOrFail($id);
        $requestData['slug'] = str_slug( $requestData['slug'] );
        if($request->hasFile('thumbnails')) {
            //delete old img
            $arr_img = unserialize( $product->thumbnails );
            foreach ($arr_img as $item){
                if(file_exists(public_path() . '/imgs/' . $this->path_thumb . '/' . $item))
                    unlink(public_path() . '/imgs/' . $this->path_thumb . '/' . $item);
            }
            //save new imgs
            $files = $request->file('thumbnails');

            $thumbnails = [];
            //handle file to save
            foreach ($files as $f) {
                //handle name of img
                $name_not_ext = str_slug( strtolower( trim( pathinfo($f->getClientOriginalName(), PATHINFO_FILENAME) ) ) );
                $ext = $f->getClientOriginalExtension();//strtolower( trim( pathinfo($f->getClientOriginalName(), PATHINFO_EXTENSION) ) );
                $full_name = $name_not_ext . '-' . time() . '.' . $ext;

                //die(var_dump($full_name));
                if ($f->storeAs($this->path_thumb, $full_name)) {
                    array_push($thumbnails, $full_name);
                    \MyHelpers::createThumbnail( $this->path_thumb, $full_name );
                }
            }

            $requestData['thumbnails'] = serialize($thumbnails);
        } else
            $requestData['thumbnails'] = $product->thumbnails;

        if ($product->update($requestData) && isset($requestData['product_category'])) {
            $productCategoryOlds = DB::table('product_category')->where('product_id', $id)->pluck('category_id')->toArray();
            $productCategoryNews = $requestData['product_category'];
            $oldDiff = array_diff($productCategoryOlds, $productCategoryNews);
            if($oldDiff){
                foreach ($oldDiff as $item){
                    DB::table('product_category')->where(['product_id' => $id, 'category_id' => $item])->delete();
                }
            }
            $newDiff = array_diff($productCategoryNews, $productCategoryOlds);
            if($newDiff){
                foreach ($newDiff as $item) {
                    DB::table('product_category')->insert([
                        'product_id' => $id,
                        'category_id' => $item
                    ]);
                }
            }
        }
        
        return redirect('admin/product')->with('flash_message', 'Product updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('admin/product')->with('flash_message', 'Product deleted!');
    }
}
