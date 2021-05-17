<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('backoffice.portfolio.all', compact('portfolios'));
    }
    public function delete($id)
    {
        $portfolios = Portfolio::find($id);
        Storage::disk('public')->delete('img/' . $portfolios->image);
        $portfolios->delete();
        return redirect()->back()->with('message', "User " . $portfolios->id . " a été supprimé ");
    }
    public function show($id)
    {
        $portfolios = Portfolio::find($id);
        return view('backoffice.portfolio.show', compact('portfolios'));
    }
    public function edit($id)
    {
        $portfolios = Portfolio::find($id);
        return view('backoffice.portfolio.edit', compact('portfolios'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'nom' => "required",
            'image' => "required",
            'categorie' => "required",
            'description' => "max: 225|required"
        ]);
        $portfolios = Portfolio::find($id);
        Storage::disk('public')->delete('img/' . $portfolios->image);
        $portfolios->nom = $request->nom;
        $portfolios->categorie = $request->categorie;
        $portfolios->description = $request->description;
        $portfolios->save();
        return redirect()->route('portfolios')->with("message", " Votre user  avec l'id " . $portfolios->id . " a été modifiée", compact('portfolios'));
    }
    public function create()
    {
        return view('backoffice.portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => "required",
            'image' => "required",
            'categorie' => "required",
            'description' => "max: 225|required"
        ]);
        $portfolios = new Portfolio;
        $portfolios->nom = $request->nom;
        $portfolios->categorie = $request->categorie;
        $portfolios->description = $request->description;
        $portfolios->image = $request->file('image')->hashName();
        $portfolios->save();
        $request->file('image')->storePublicly('img', 'public');
        return redirect()->route('portfolios')->with("message",  " Votre user  a été créer avec l'id  " . $portfolios->id);
    }
    public function download($id)
    {
        $portfolios = Portfolio::find($id);

        return Storage::disk('public')->download('img/' . $portfolios->image);
    }
}
