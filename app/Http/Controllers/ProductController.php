<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;

class ProductController extends Controller
{
    public function __construct() 
    {
        $this->Middleware(['auth', 'admin']);
    }
    // GET /products
    public function index() {
        $products = Product::all();
        return view('admin.products.index', compact('products'));        
    }

    // GET /products/create
    public function create() {
        return view('/admin.products.create');
    }

    // POST /products
    public function store(ProductRequest $request) {

        Product::create( request(
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

        // Redirect to admin product page
        return redirect('/admin/products');
    }

    // GET /products/id/edit
    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('/admin.products.edit', compact('product'));
    }

    // PATCH /products/id
    public function update($id, ProductRequest $request) {
        $product = Product::findOrFail($id);
        // return dd($request->description);
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
        return back();
    }

    // DELETE /products/id
    public function destroy($id) {
        Product::where('id', $id)->delete();
        return redirect('/admin/products');
    }
}
