<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function index(){
        $eleves = Eleve::all();
        return view('backoffice.eleve.all', compact('eleves'));
    }
    public function destroy($id){
        $eleves = Eleve::find($id);
        $eleves->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $eleves = Eleve::find($id);
        return view("backoffice.eleve.edit", compact("eleves"));
    }
    public function update($id, Request $request){
        $eleves = Eleve::find($id);
        $eleves->name = $request->name;
        $eleves->prenom = $request->prenom;
        $eleves->age = $request->age;
        $eleves->ddn = $request->datedn;
        $eleves->nationalité = $request->natio;
        $eleves->updated_at = now();
        $eleves->save();
        return redirect()->route("eleve");

    }
}
