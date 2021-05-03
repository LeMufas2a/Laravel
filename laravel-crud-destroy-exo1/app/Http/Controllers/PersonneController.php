<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    //
    public function index() {
        $personnes = Personne::all();
        return view('welcome', compact('personnes'));
    }
    public function destroy($id) {
        $personnes = Personne::find($id);
        $personnes->delete();
        return redirect()->back();
        
    }
}
