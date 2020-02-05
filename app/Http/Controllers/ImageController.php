<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('images');
    }

    public function store(Request $request)
    {
        $image = new Image();
        $image->name = $request->input('name');

        $file= $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.' .$extension;
        $file->move('uploads/images/', $filename);
        $image->image= 'uploads/images/'.$filename;

        $image->save();

        return view('images')->with('image',$image);
    }

    public function getAllImages()
    {
        $images = Image::all();
        return $images;
    }
}
