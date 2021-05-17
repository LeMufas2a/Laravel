<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backoffice.user.all', compact('users'));
    }
    public function delete($id)
    {
        $users = User::find($id);
        Storage::disk('public')->delete('img/' . $users->picture);
        $users->delete();
        return redirect()->back()->with('message', "User " . $users->id . " a été supprimé ");
    }
    public function show($id)
    {
        $users = User::find($id);
        return view('backoffice.user.show', compact("users"));
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('backoffice.user.edit', compact('users'));
    }
    public function update($id, Request $request)
    {
        $request->validate([
            'nom' => "required",
            'prenom' => "required",
            'age' => "required",
            'email' => "max: 225|required",
            'password' => "required",
            'picture' => 'required'
        ]);
        $users = User::find($id);
        Storage::disk('public')->delete('img/' . $users->picture);
        $users->nom = $request->nom;
        $users->prenom = $request->prenom;
        $users->age = $request->age;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->picture = $request->file('picture')->hashName();
        $users->save();
        return redirect()->route('users')->with("message", " Votre user  avec l'id " . $users->id . " a été modifiée");
    }
    public function create()
    {
        return view('backoffice.user.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => "required",
            'prenom' => "required",
            'age' => "required",
            'email' => "max: 225|required",
            'password' => "required",
            'picture' => 'required'
        ]);
        $users = new User;
        $users->nom = $request->nom;
        $users->prenom = $request->prenom;
        $users->age = $request->age;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->picture = $request->file('picture')->hashName();
        $users->save();
        $request->file('picture')->storePublicly('img', 'public');
        return redirect()->route('users')->with("message",  " Votre user  a été créer avec l'id  " . $users->id);
    }
    public function download($id)
    {
        $users = User::find($id);

        return Storage::disk('public')->download('img/' . $users->picture);
            /*  redirect()->back()->with("message",  " Vous avez télécharger la Photo de profil de  " . $users->nom . "avec l'id" . $users->id) */;
    }
}
