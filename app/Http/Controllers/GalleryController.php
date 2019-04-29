<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Product;

class GalleryController extends Controller
{
    public function index() {
        $images = Image::all();
        return view('admin.gallery.index', compact('images'));
    }


}
