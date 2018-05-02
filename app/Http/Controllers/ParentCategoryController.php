<?php

namespace App\Http\Controllers;

use App\ParentCategory;
use Illuminate\Http\Request;

class ParentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parentsCategory=ParentCategory::all();

        return view('categories.index',compact('parentsCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('categories.create-parent');
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
            'name'=>'required'
        ]);
        ParentCategory::create(['name'=>$request->name,'desc'=>$request->desc]);
        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ParentCategory  $parentCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ParentCategory $parentCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ParentCategory  $parentCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ParentCategory  $parentCategory)
    {
       

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParentCategory  $parentCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ParentCategory  $parentCategory)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParentCategory  $parentCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParentCategory $parentCategory)
    {
        //
    }
}
