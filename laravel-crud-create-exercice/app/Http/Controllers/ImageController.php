<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $img = Image::all();
        return view('Image', compact('img'));
    }
    public function destroy($id)
    {
        $img = Image::find($id);
        $img->delete();
        return redirect()->back();
    }
}
