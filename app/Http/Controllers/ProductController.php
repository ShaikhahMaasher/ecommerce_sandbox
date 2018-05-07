<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Category;

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
        $categories = Category::where('category_id',0)->get();
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
                'slug'=>$request->slug
        ]);
        ($request->in_stock == 1)? $product->stock_number = $request->stock_number:'';
        $product->save();

        if ($request['categ']) {
            foreach ($request['categ'] as $child) {
                $product->categories()->attach($child);
            }   
        }
           
        // Redirect to admin product page
        return redirect('/admin/products');
    }

    // GET /products/id/edit
    public function edit($id) {
        $product = Product::findOrFail($id);
        $categories = Category::where('category_id',0)->get();
        return view('/admin.products.edit', compact('product', 'categories'));
    }

    // PATCH /products/id
    public function update($id, ProductRequest $request) {
        $product = Product::findOrFail($id);
        $product->update(request(
            [
                'title', 
                'slug',                
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
        if ($request['categ']) {
            $product->categories()->sync($request['categ']);              
        }
        return back();
    }

    // DELETE /products/id
    public function destroy($id) {
        Product::where('id', $id)->delete();
        return redirect('/admin/products');
    }
}
