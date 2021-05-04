<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function index()
    {
        $batiments = Batiment::all();
        return view('backoffice.batiment.all', compact('batiments'));
    }
    public function destroy($id)
    {
        $batiments = Batiment::find($id);
        $batiments->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $batiments = Batiment::find($id);
        return view("backoffice.batiment.edit", compact("batiments"));
    }

    public function update($id, Request $request){
        $batiments = Batiment::find($id);
        $batiments->name = $request->name;
        $batiments->adresse = $request->adresse;
        $batiments->description = $request->description;
        $batiments->updated_at = now();
        $batiments->save();
        return redirect()->route("batiment");

    }
}
