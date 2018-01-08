<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public $path_file = 'brand';
    public $path_thumb = 'brand/thumbnails';

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
            $brand = Brand::paginate($perPage);
        } else {
            $brand = Brand::paginate($perPage);
        }

        return view('admin.brand.index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        if($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $name_not_ext = str_slug( strtolower( trim( pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) ) ) );
            $ext = $file->getClientOriginalExtension();//strtolower( trim( pathinfo($f->getClientOriginalName(), PATHINFO_EXTENSION) ) );
            $full_name = $name_not_ext . '-' . time() . '.' . $ext;

            //die(var_dump($full_name));
            if($file->storeAs($this->path_thumb, $full_name)) {
                $requestData['thumbnail'] = $full_name;
                Brand::create($requestData);
                return redirect('admin/brand')->with('flash_message', 'brand added!');
            }
            Session::flash('danger', 'Error:71');
            return redirect()->back();
            
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
        $brand = Brand::findOrFail($id);

        return view('admin.brand.show', compact('brand'));
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
        $brand = Brand::findOrFail($id);

        return view('admin.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();
        $brand = Brand::findOrFail($id);
        $requestData['slug'] = str_slug( $requestData['slug'] );

        if($request->hasFile('thumbnail')) {
            //delete old img
            $img = $brand->thumbnail;
            if(file_exists(public_path() . '/imgs/' . $this->path_thumb . '/' . $img))
                unlink(public_path() . '/imgs/' . $this->path_thumb . '/' . $img);
            //save new imgs
            $file = $request->file('thumbnail');
            //handle file to save

            //handle name of img
            $name_not_ext = str_slug( strtolower( trim( pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) ) ) );
            $ext = $file->getClientOriginalExtension();//strtolower( trim( pathinfo($f->getClientOriginalName(), PATHINFO_EXTENSION) ) );
            $full_name = $name_not_ext . '-' . time() . '.' . $ext;

            //die(var_dump($full_name));
            if ($file->storeAs($this->path_thumb, $full_name)) {
                $requestData['thumbnail'] = $full_name;
                \MyHelpers::createThumbnail( $this->path_thumb, $full_name );
            }
        } else
            $requestData['thumbnail'] = $brand->thumbnail;

        $brand->update($requestData);

        return redirect('admin/brand')->with('flash_message', 'brand updated!');
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
        Brand::destroy($id);

        return redirect('admin/brand')->with('flash_message', 'brand deleted!');
    }
}
