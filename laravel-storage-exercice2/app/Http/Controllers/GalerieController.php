<?php

namespace App\Http\Controllers;

use App\Models\Galerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalerieController extends Controller
{
    public function index()
    {
        $galeries = Galerie::all();
        return view('backoffice.galerie.all', compact('galeries'));
    }
    public function delete($id)
    {
        $galeries = Galerie::find($id);
        Storage::disk('public')->delete('img/' . $galeries->image);
        $galeries->delete();
        return redirect()->back()->with('message', "User " . $galeries->id . " a été supprimé ");
    }
    public function show($id)
    {
        $galeries = Galerie::find($id);
        return view('backoffice.galerie.show', compact('galeries'));
    }
    public function edit($id)
    {
        $galeries = Galerie::find($id);
        return view('backoffice.galerie.edit', compact('galeries'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'nom' => "required",
            'image' => "required",
            'description' => "max: 225|required"
        ]);
        $galeries = Galerie::find($id);
        Storage::disk('public')->delete('img/' . $galeries->image);
        $galeries->nom = $request->nom;
        $galeries->description = $request->description;
        $galeries->image = $request->file('image')->hashName();
        $request->file('image')->storePublicly('img', 'public');
        $galeries->save();
        return redirect()->route('galeries')->with("message", " Votre user  avec l'id " . $galeries->id . " a été modifiée", compact('galeries'));
    }
    public function create()
    {
        return view('backoffice.galerie.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => "required",
            'image' => "required",
            'description' => "max: 225|required"
        ]);
        $galeries = new Galerie;
        $galeries->nom = $request->nom;
        $galeries->description = $request->description;
        $galeries->image = $request->file('image')->hashName();
        $galeries->save();
        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('galeries')->with("message",  " Votre user  a été créer avec l'id  " . $galeries->id);
    }
    public function download($id)
    {
        $galeries = Galerie::find($id);

        return Storage::disk('public')->download('img/' . $galeries->image);
    }
}
