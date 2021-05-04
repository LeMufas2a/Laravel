<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(){
        $formations = Formation::all();
        return view('backoffice.formation.all', compact('formations'));
    }
    public function destroy($id){
        $formations = Formation::find($id);
        $formations->delete();
        return redirect()->back();
    }
    public function edit($id){
        $formations = Formation::find($id);
        return view('backoffice.formation.edit', compact('formations'));
    }

    public function update($id, Request $request){
        $formations= Formation::find($id);
        $formations->name = $request->name;
        $formations->nombre = $request->nombre;
        $formations->horsCondition = $request->hc;
        $formations->description = $request->description;
        $formations->updated_at = now();
        $formations->save();
        return redirect()->route("formation");

    }
}
