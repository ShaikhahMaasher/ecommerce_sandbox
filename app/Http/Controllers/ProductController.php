<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Category;
use App\Image as imageTable;
use Image;
use Storage;

class ProductController extends Controller
{
    // GET /products
    public function index() {
        $products = Product::paginate(15);      
        // temp count
        $count = Product::count();
        return view('admin.products.index', compact('products', 'count'));        
    }

    // GET /products/create
    public function create() {
        $categories = Category::where('category_id',0)->get();
        return view('/admin.products.create', compact('categories'));
    }

    // POST /products
    public function store(ProductRequest $request) {
        $product = new Product([
                'id' => Product::withTrashed()->count()+1,
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

        if ($request->hasFile('featured_img')) {
            $img = $request->file('featured_img');
            $filename = 'featured_' . time() . '_' . $img->getClientOriginalName();
            $location = Storage_path('\app\public\products\\' . $filename);
            Image::make($img)->save($location);
            $product->images()->create([
                'path' => $filename
            ]);
        }
        $product->images()->update([
            'is_assigned' => 1
        ]);
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

        // Update featured image
        if ($request->hasFile('featured_img')) {
    
            // Save the new image in storage
            $img = $request->file('featured_img');
            $filename = 'featured_' . time() . '_' . $img->getClientOriginalName();
            $location = Storage_path('\app\public\products\\' . $filename);
            Image::make($img)->save($location);

            // check if has old image, then update
            if($product->productImage('feature')) {
                // Fetch old image from database and update database
                $img = $product->productImage('feature');
                // Get old image path
                $oldImage = $img->path;
                // Update database with new image path
                $img->update(['path' => $filename]);
                // Delete old image from storage
                Storage::delete('public\products\\'.$oldImage);
            //else create new featured image
            } else { 
                $product->images()->create([
                    'path' => $filename
                ]);
            }
        }

        $product->images()->update([
            'is_assigned' => 1
        ]);

        return back();
    }

    // DELETE /products/id
    public function destroy($id) {
        $product = Product::findOrFail($id);
        foreach($product->images as $image) {
            Storage::delete('public\products\\'.$image->path);  
        }
        $product->images()->delete();  
        $product->delete();
        return redirect('/admin/products');
    }

    public function uploadGallery(Request $request) {
        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'sometimes|image|max:500',
            ]);
            $img = $request->file('file');
            $filename = 'gallery_' . uniqid() . '_' . $img->getClientOriginalName();
            $location = Storage_path('\app\public\products\\' . $filename);
            Image::make($img)->save($location);
            imageTable::create([
                'imageable_id' => Product::withTrashed()->count()+1,
                'imageable_type' => 'App\Product',
                'path' => $filename
            ]);
        }
    }

    public function updateGallery($id, Request $request) {
        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'sometimes|image|max:500',
            ]);
            $img = $request->file('file');
            $filename = 'gallery_' . uniqid() . '_' . $img->getClientOriginalName();
            $location = Storage_path('\app\public\products\\' . $filename);
            Image::make($img)->save($location);
            imageTable::create([
                'imageable_id' => $id,
                'imageable_type' => 'App\Product',
                'path' => $filename
            ]);
        }
    }

    public function deleteFeature(Request $request) {
        $response = array(
            'status' => 'success',
            'msg' => 'Image has been successfully deleted',
        );
        Product::findOrFail($request->id)->productImage('feature')->delete();        
        return response()->json($response);     
    }
}
