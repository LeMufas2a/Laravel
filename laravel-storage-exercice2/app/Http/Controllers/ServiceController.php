<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('backoffice.service.all', compact('services'));
    }
    public function delete($id)
    {
        $services = Service::find($id);
        $services->delete();
        return redirect()->back()->with('message', "L'utilisateur"  . $services->id  . " a été supprimé ", compact('services'));
    }
    public function show($id)
    {
        $services = Service::find($id);
        return view('backoffice.service.show', compact('services'));
    }
    public function edit($id)
    {
        $services = Service::find($id);
        return view('backoffice.service.edit', compact('services'));
    }
    public function update($id, Request $request)
    {

        $services = Service::find($id);
        $services->icone = $request->icone;
        $services->titre = $request->titre;
        $services->description = $request->description;
        $services->save();
        return redirect()->route('services')->with("message", " Votre utilisateur  avec l'id "  . $services->id  . " a été modifiée");
    }
    public function create()
    {
        return view('backoffice.portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icone' => "required",
            'titre' => "required",
            'description' => "required"
        ]);
        $services = new Service;
        $services->icone = $request->icone;
        $services->titre = $request->titre;
        $services->description = $request->description;
        $services->save();
        return redirect()->route('services')->with("message",  " Votre user  a été créer avec l'id  " .  $services->id);
    }
}
