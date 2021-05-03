<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function index(){
        $batiments = Batiment::all();
        return view('batiment', compact('batiments'));
    }
    public function destroy($id){
        $batiments = Batiment::find($id);
        $batiments->delete();
        return redirect()->back();
    }
}
