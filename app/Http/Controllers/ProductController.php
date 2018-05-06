<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\ParentCategory;

class ProductController extends Controller
{
    public function __construct() 
    {
        $this->Middleware(['auth', 'admin']);
    }
    // GET /products
    public function index() {
        $products = Product::paginate(15);
        // temp count
        $count = count(Product::all());
        return view('admin.products.index', compact('products', 'count'));        
    }

    // GET /products/create
    public function create() {
        $categories = ParentCategory::all();
        return view('/admin.products.create', compact('categories'));
    }

    // POST /products
    public function store(ProductRequest $request) {

        // return dd($request);
        $product = new Product([
                'title' => $request->title, 
                'short_description' => $request->short_description, 
                'description' => $request->description, 
                'regular_price' => $request->regular_price, 
                'sale_price' => $request->sale_price, 
                'sku' => $request->sku, 
                'in_stock' => $request->in_stock, 
                'weight' => $request->weight,
        ]);
        ($request->in_stock == 1)? $product->stock_number = $request->stock_number:'';
        $product->save();
        
        if ($request['parent-categ']) {
            foreach ($request['parent-categ'] as $parent) {
                $product->parentcategories()->attach($parent);
            }   
        }

        if ($request['child-categ']) {
            foreach ($request['child-categ'] as $child) {
                $product->categories()->attach($child);
            }   
        }
           
        // Redirect to admin product page
        return redirect('/admin/products');
    }

    // GET /products/id/edit
    public function edit($id) {
        $product = Product::findOrFail($id);
        $categories = ParentCategory::all(); 
        return view('/admin.products.edit', compact('product', 'categories'));
    }

    // PATCH /products/id
    public function update($id, ProductRequest $request) {
        $product = Product::findOrFail($id);
        $product->update(request(
            [
                'title', 
                'short_description', 
                'description', 
                'regular_price', 
                'sale_price', 
                'sku', 
                'in_stock', 
                ($request->in_stock == 1)? 'stock_number':'', 
                'weight',
            ])
        );

        if ($request['parent-categ']) {
            $product->parentcategories()->sync($request['parent-categ']);            
        }

        if ($request['child-categ']) {
            $product->categories()->sync($request['child-categ']);              
        }
        return back();
    }

    // DELETE /products/id
    public function destroy($id) {
        Product::where('id', $id)->delete();
        return redirect('/admin/products');
    }
}
