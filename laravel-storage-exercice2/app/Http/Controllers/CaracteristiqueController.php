<?php

namespace App\Http\Controllers;

use App\Models\Caracteristique;
use Illuminate\Http\Request;

class CaracteristiqueController extends Controller
{
    public function index()
    {
        $caracs = Caracteristique::all();
        return view('backoffice.caracteristique.all', compact('caracs'));
    }
    public function delete($id)
    {
        $caracs = Caracteristique::find($id);
        $caracs->delete();
        return redirect()->back()->with('message', "L'utilisateur"  . $caracs->id  . " a été supprimé ", compact('caracs'));
    }
    public function show($id)
    {
        $caracs = Caracteristique::find($id);
        return view('backoffice.caracteristique.show', compact('caracs'));
    }
    public function edit($id)
    {
        $caracs = Caracteristique::find($id);
        return view('backoffice.caracteristique.edit', compact('caracs'));
    }
    public function update($id, Request $request)
    {

        $caracs = Caracteristique::find($id);
        $caracs->nom = $request->nom;
        $caracs->chiffre = $request->chiffre;
        $caracs->icone = $request->icone;
        $caracs->save();
        return redirect()->route('caracteristiques')->with("message", " Votre utilisateur  avec l'id "  . $caracs->id  . " a été modifiée");
    }
    public function create()
    {
        return view('backoffice.caracteristique.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icone' => "required",
            'chiffre' => "required",
            'nom' => "required"
        ]);
        $caracs = new Caracteristique();
        $caracs->nom = $request->nom;
        $caracs->chiffre = $request->chiffre;
        $caracs->icone = $request->icone;
        $caracs->save();
        return redirect()->route('caracteristiques')->with("message",  " Votre user  a été créer avec l'id  " .  $caracs->id);
    }
}
