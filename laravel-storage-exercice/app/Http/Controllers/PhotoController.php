<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('backoffice.photo.all', compact('photos'));
    }
    public function delete($id)
    {
        $photos = Photo::find($id);
        Storage::disk("public")->delete("img/" . $photos->lien);
        $photos->delete();
        return redirect()->back();
    }
    public function show($id){
        $photos = Photo::find($id);
        return view('backoffice.photo.show', compact("photos"));
    }
    public function edit($id)
    {
        $photos = Photo::find($id);
        return view('backoffice.photo.edit', compact('photos'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            "nom" => "required|max:30",
            "lien" => "required|max:255",
            "categorie" => "required|max:50",
            "description" => "required|max:255"
        ]);
        $photos = Photo::find($id);
        Storage::disk('public')->delete("img/" . $photos->lien);
        $photos->nom = $request->nom;
        $photos->lien = $request->file('lien')->hashName();
        $photos->catégorie = $request->catégorie;
        $photos->description = $request->description;
        $photos->save();
        $request->file('lien')->storePublicly('img', 'public');
        return redirect()->route('photos')->with('message', "Vous avez bien modifié la photo: " . $photos->nom);
    }
    public function create()
    {
        return view('backoffice.photo.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => "required",
            'lien' => "max: 225|required",
            'catégorie' => "required",
            'description' => "required"
        ]);
        $photos = new Photo;
        $photos->nom = $request->nom;
        $photos->lien = $request->file('lien')->hashName();
        $photos->catégorie = $request->catégorie;
        $photos->description = $request->description;
        $photos->save();
        $request->file('lien')->storePublicly('img', 'public');
        return redirect()->route("photos")->with("message", "La photo a été bien créée");
    }
    public function download($id)
    {
        $photos = Photo::find($id);
        return Storage::disk('public')->download('img/' . $photos->lien);
    }
}
