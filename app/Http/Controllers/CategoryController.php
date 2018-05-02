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
        $parentsCategory=ParentCategory::all();
        
         return view('admin.categories.index',compact('parentsCategory'));
       
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
           'parent_categories_id'=>'required'
        ]);
        
        Category::create(['name'=>$request->name,'desc'=>$request->desc,'parent_category_id'=>$request->parent_categories_id,'slug'=>$request->slug]);
        return redirect('category');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category  $category)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category  $category)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category  $category)
    {
        
    }

}
