<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class inscription extends Controller
{
    public function register()
    {
        return view('pages.inscription');
    }

    public function boutton(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
        ]);

        
        // Enregistrer les données dans la base de données
        User::create([
            'email' => $request->email,
            'password' => $request->password,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
        ]);


        return redirect()->route('connexion')->with('success', 'Inscription reussie !');
    }
}
