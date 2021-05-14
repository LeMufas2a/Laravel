<?php

namespace App\Http\Controllers;

use App\Models\Biblio;
use Illuminate\Http\Request;

class BiblioController extends Controller
{
    public function index()
    {
        $biblios = Biblio::all();
        return view('Biblio', compact('biblios'));
    }
    public function destroy($id)
    {
        $biblios = Biblio::find($id);
        $biblios->delete();
        return redirect()->back();
    }
}
