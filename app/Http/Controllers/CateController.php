<?php

namespace App\Http\Controllers;

use App\Cate;
use Illuminate\Http\Request;

class CateController extends Controller
{
    public function __construct() 
    {
        $this->Middleware(['auth', 'admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Cate::where('cate_id',0)->get();
        $allcategories=Cate::all();
          return view('admin.categories.cate',compact('categories','allcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name'=>'required',
        ]);
      $cate_id=! empty($request->parent_categories_id)? $request->parent_categories_id:0;
        Cate::create(['name'=>$request->name,'cate_id'=>$cate_id]);
        return redirect('admin/cate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function show(Cate $cate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function edit(Cate $cate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cate $cate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cate  $cate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cate $cate)
    {
        //
    }
}
