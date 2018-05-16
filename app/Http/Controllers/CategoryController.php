<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::where('category_id',0)->paginate(5);
        // temp count
         $count = count(Category::all());
         return view('admin.categories.index', compact('categories', 'count'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('admin.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $this->validate(request(),['name'=>'required|min:3',]);
        $category_id=! empty($request->parent_categories_id)? $request->parent_categories_id:0;
        Category::create(
            [
                'name'=>$request->name,
                'desc'=>$request->desc,
                'category_id'=> $category_id,
                'slug'=>$request->slug
            ]);
        return redirect('admin/category');
    }

    /**
     *Get category/edit/{slug}
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $categories=Category::all();
        $category=Category::where('slug', $slug)->first();
        return view('admin.categories.edit',compact('category','categories'));
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
        $this->validate(request(),['name'=>'required|min:3',]);
         $category=Category::where('slug', $slug)->first();
         $category_id=! empty($request->parent_categories_id)? $request->parent_categories_id:0;
         $category->update(
             [
                 'name'=>$request->name,
                 'desc'=>$request->desc,        
                 'category_id'=>$category_id,    
                 'slug'=>$request->slug
             ]);
             return redirect('admin/category');
     }

    /**
     * Remove the specified resource from storage.
     * Get category/delete/{slug}
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
     public function destroy($slug)
     { //change the parent category of its childs
        $category=Category::where('slug', $slug)->first();;
        Category::where('category_id',$category->id)->update(['category_id'=>$category->category_id]);
        //delete category
        $category->delete();
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
