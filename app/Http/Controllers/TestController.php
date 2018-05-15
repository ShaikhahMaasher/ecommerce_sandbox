<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use Image;

class TestController extends Controller
{
    public function index() {
        return view('test');
    }

    public function create() {
        return view('test');
    }

    public function store(Request $request) {
        if ($request->hasFile('file')) {
            $img = $request->file('file');
            $filename = 'gallery_' . time() . '_' . $img->getClientOriginalName();
            $location = Storage_path('\app\public\products\\' . $filename);
            Image::make($img)->save($location);
            Test::create([
                'path' => $filename
            ]);
        }
    }
}
