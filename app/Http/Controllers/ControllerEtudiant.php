<?php

namespace App\Http\Controllers;

use App\Models\ModelEtudiant;
use Illuminate\Http\Request;
class ControllerEtudiant extends Controller
{
    //
     public function create()
    {
        return view('pages.etudiant');
    }

   
    public function store(Request $request)
    {
        $etudiant = new ModelEtudiant();
        $etudiant->matricule = $request->input('matricule');
        $etudiant->numero_etudiant = $request->input('numero_etudiant');
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->sexe = $request->input('sexe');
        $etudiant->date_naissance = $request->input('date_naissance');
        $etudiant->email = $request->input('email');
        $etudiant->telephone = $request->input('telephone');
        $etudiant->filiere = $request->input('filiere');
        $etudiant->niveau = $request->input('niveau');
        $etudiant->promotion = $request->input('promotion');
        $etudiant->statut = $request->input('statut');
        $etudiant->save();

        // Redirect to a success page or return a response
        return redirect()->route('export')->with('success', 'Étudiant créé avec succès.');
    }

    
    public function index()
    {
        $etudiants = ModelEtudiant::all();
        return view('pages.etudiant', compact('etudiants'));
    }
}
