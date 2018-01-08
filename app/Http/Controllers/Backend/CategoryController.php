<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
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
            $category = Category::paginate($perPage);
        } else {
            $category = Category::paginate($perPage);
        }

        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();//Category::pluck('title', 'id')->toArray();
        return view( 'admin.category.create', [ 'categories' => $categories ] );//, 'category_parent' => $categories, 'category_child' => $categories
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

        $category_parent = $requestData['category_parent'];
        $category_child = $requestData['category_child'];

        $newCategory = Category::create($requestData);
        $newId = $newCategory->id;

        if($newId && $category_parent){
            foreach ($category_parent as $item){
                DB::table('category_child')->insert([
                    'parent_id' => $item,
                    'child_id' => $newId
                ]);
            }
        }

        if($newId && $category_child){
            foreach ($category_child as $item){
                DB::table('category_child')->insert([
                    'parent_id' => $newId,
                    'child_id' => $item
                ]);
            }
        }

        return redirect('admin/category')->with('flash_message', 'Category added!');
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
        $category = Category::findOrFail($id);

        return view('admin.category.show', compact('category'));
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
        $category = Category::findOrFail($id);
        $categories = Category::where('id', '<>', $id)->get();
        $parent_selected = DB::table('category_child')->where('parent_id', $id)->pluck('child_id')->toArray();
        $child_selected =  DB::table('category_child')->where('child_id', $id)->pluck('parent_id')->toArray();

        return view('admin.category.edit', ['category' => $category, 'categories' => $categories, 'parent' => $parent_selected, 'child' => $child_selected]);
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
        
        $category = Category::findOrFail($id);
        $category->update($requestData);

        $category_parent = $requestData['category_parent'];
        $category_child = $requestData['category_child'];

        if($category_parent){
            $parentOlds = DB::table('category_child')->where('parent_id', $id)->pluck('child_id')->toArray();
            $parentNews = $category_parent;
            $oldDiff = array_diff($parentOlds, $parentNews);
            if($oldDiff){
                foreach ($oldDiff as $item){
                    DB::table('category_child')->where(['parent_id' => $id, 'child_id' => $item])->delete();
                }
            }
            $newDiff = array_diff($parentNews, $parentOlds);
            if($newDiff){
                foreach ($newDiff as $item) {
                    DB::table('category_child')->insert([
                        'parent_id' => $id,
                        'child_id' => $item
                    ]);
                }
            }
        }

        if($category_child){
            $old = DB::table('category_child')->where('child_id', $id)->pluck('parent_id')->toArray();
            $new = $category_child;
            $oldDiff = array_diff($old, $new);
            if($oldDiff){
                foreach ($oldDiff as $item){
                    DB::table('category_child')->where(['parent_id' => $item, 'child_id' => $id])->delete();
                }
            }
            $newDiff = array_diff($new, $old);
            if($newDiff){
                foreach ($newDiff as $item) {
                    DB::table('category_child')->insert([
                        'parent_id' => $item,
                        'child_id' => $id
                    ]);
                }
            }
        }

        return redirect('admin/category')->with('flash_message', 'Category updated!');
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
        Category::destroy($id);

        return redirect('admin/category')->with('flash_message', 'Category deleted!');
    }
}
