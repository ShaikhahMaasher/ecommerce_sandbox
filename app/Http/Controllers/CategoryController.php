<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\ParentCategory;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parentsCategory=ParentCategory::paginate(5);
        // temp count
        $count = count(ParentCategory::all());
         return view('admin.categories.index', compact('parentsCategory', 'count'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentsCategory=ParentCategory::all();
        return view('admin.categories.create',compact('parentsCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $this->validate(request(),[
            'name'=>'required|unique:categories|min:3',
        ]);
        
        Category::create(['name'=>$request->name,'desc'=>$request->desc,'parent_category_id'=>$request->parent_categories_id,'slug'=>$request->slug]);
        return redirect('admin/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     *Get category/edit/{slug}
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $parentsCategory=ParentCategory::all();
        $category=Category::where('slug', $slug)->first();
        return view('admin.categories.edit',compact('category','parentsCategory'));
    }

    /**
     * Update the specified resource in storage.
     * Post category/update/{slug}
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $slug)
     {
         $category=Category::where('slug', $slug)->first();
         $category->update(['name'=>$request->name,'desc'=>$request->desc,'parent_category_id'=>$request->parent_categories_id,'slug'=>$request->slug]);
         return redirect('admin/category');
     }

    /**
     * Remove the specified resource from storage.
     * Get category/delete/{slug}
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
     public function destroy($slug)
     {
         Category::where('slug', $slug)->delete();
         return redirect('admin/category');
     }
     //Get category/status-show/{slug}
     public function showCategory($slug){
        Category::where('slug', $slug)->where('status','0')->update(['status'=>1]);
        return redirect('admin/category');
    }
      //Get category/status-hide/{slug}
    public function hideCategory($slug){
        Category::where('slug', $slug)->where('status','1')->update(['status'=>0]);
        return redirect('admin/category');
    }
    //Get category/trashed
    public function readTrashed(){
        $categories=Category::onlyTrashed()->get();
        return view('admin.categories.trashed',compact('categories'));
    }
    //Get category/restore/{slug}
    public function restore($slug){
        Category::withTrashed()->where('slug',$slug)->restore();
        return redirect('admin/category');
    }

}
