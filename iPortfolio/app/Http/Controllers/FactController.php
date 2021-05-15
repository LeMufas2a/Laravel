<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use Illuminate\Http\Request;

class FactController extends Controller
{
    public function index() {
        $facts = Fact::all();
        return view('backoffice.facts.all', compact('facts'));
    }

    public function delete($id){
        $facts = Fact::find($id);
        $facts->delete();
        return redirect()->back();
    }
    public function edit($id){
        $facts = Fact::find($id);
        return view('backoffice.facts.edit', compact('facts'));
    }
    public function update($id, Request $request) {
        $facts = Fact::find($id);
        $facts->icone = $request->icone;
        $facts->chiffre = $request->chiffre;
        $facts->texte = $request->texte;
        $facts->save();
        return redirect()->route('fact');

    }
}
