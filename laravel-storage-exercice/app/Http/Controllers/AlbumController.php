<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('backoffice.album.all', compact('albums'));
    }
    public function delete($id)
    {
        $albums = Album::find($id);
        $albums->delete();
        return redirect()->back();
    }
    public function show($id){
        $albums = Album::find($id);
        return view('backoffice.album.show', compact("albums"));
    }
    public function edit($id)
    {
        $albums = Album::find($id);
        return view('backoffice.album.edit', compact('albums'));
    }
    public function update($id, Request $request)
    {
        $albums = Album::find($id);
        $albums->nom = $request->nom;
        $albums->description = $request->description;
        $albums->save();
        return redirect()->route('albums');
    }
    public function create()
    {
        return view('backoffice.album.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => "required",
            'description' => "required",
        ]);
        $albums = new Album;
        $albums->nom = $request->nom;
        $albums->description = $request->description;
        $albums->save();
        return redirect()->route('albums');
    }
}
