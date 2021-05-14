<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index()
    {
        $livres = Livre::all();
        return view('Livre', compact('livres'));
    }
    public function destroy($id)
    {
        $livres = Livre::find($id);
        $livres->delete();
        return redirect()->back();
    }
}
