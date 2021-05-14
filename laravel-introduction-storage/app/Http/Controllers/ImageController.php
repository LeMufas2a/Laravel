<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(){
        $images = Image::all();
        return view('partials.photo.all', compact('images'));
    }
    public function delete($id){
        $images = Image::find($id);
        Storage::disk("public")->delete("img/". $images->path);
        $images->delete();
        return redirect()->back();
    }
    public function edit($id){
        $images = Image::find($id);
        return view('partials.photo.edit', compact('images'));
    }
    public function update($id, Request $request) {
        $images = Image::find($id);
        Storage::disk('public')->delete("img/". $images->path);
        $images->nom = $request->nom;
        $images->path = $request->file('path')->hashName();
        $images->description = $request->description;
        $images->save();
        $request->file('path')->storePublicly('img', 'public');
        return redirect()->route('images');
    }
    public function create(){
        return view('partials.photo.create');
    }
    public function store( Request $request) {
        $request->validate([
            'nom' => "required",
            'path' => "max: 225|required",
            'description'=> "required"
        ]); 
        $images = new Image;
        $images->nom = $request->nom;
        $images->path = $request->file('path')->hashName();
        $images->description = $request->description;
        $images->save();
        $request->file('path')->storePublicly('img', 'public');
        return redirect()->route('images');

    }
}
