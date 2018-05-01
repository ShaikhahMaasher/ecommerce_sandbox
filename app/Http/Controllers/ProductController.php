<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return view('/admin.products.create_new');
    }

    // POST /products
    public function store() {
        // Validate data
        // dd(request()->all());
        $this->validate(request(), [
            'title' => 'required|min:2',
            'description' => 'required'
        ]);

        Product::create(request(['title', 'description']));

        // Redirect to admin product page
        return redirect('/admin/products');
    }

    // GET /products/id/edit
    public function edit($id) {
        $product = Product::findOrFail($id);
        return view('/admin.products.edit', compact('product'));
    }

    // PATCH /products/id
    public function update($id) {
        $product = Product::findOrFail($id);
        $product->update(request(['title', 'description']));
        return back();
    }

    // DELETE /products/id
    public function destroy($id) {
        Product::where('id', $id)->delete();
        return redirect('/admin/products');
    }
}
