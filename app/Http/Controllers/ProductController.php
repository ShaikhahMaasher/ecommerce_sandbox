<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
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
        // Create a new product and save data from the request 
        // Product::create([
        //     'title' => request('title'),
        //     'description' => request('description')
        // ]);

        // OR
        Product::create(request(['title', 'description']));

        // Redirect to admin product page
        return redirect('/admin/products');
    }

    // GET /products/id/edit
    public function edit($id) {
        
    }

    // GET /products/id
    public function show($id) {
        
    }

    // PATCH /products/id
    public function update($id) {

    }

    // DELETE /products/id
    public function destroy($id) {
        
    }
}
