<?php

namespace App\Http\Controllers;

use App\Models\ModelJury;
use Illuminate\Http\Request;

class ControllerJury extends Controller
{
    //
     public function create()
    {
        return view('pages.jury');
    }

    /**
     * Store a new jury in the database.
     */
    public function store(Request $request)
    {
        $jury = new ModelJury();
        $jury->code_jury = $request->input('code_jury');
        $jury->nom_jury = $request->input('nom_jury');
        $jury->promotion = $request->input('promotion');
        $jury->semestre = $request->input('semestre');
        $jury->session = $request->input('session');
        $jury->annee_academique = $request->input('annee_academique');
        $jury->date = $request->input('date_deliberation');
        $jury->statut = $request->input('statut');
        $jury->president = $request->input('president');
        $jury->secretaire = $request->input('secretaire');
        $jury->membres = $request->input('membres');
        $jury->remarques = $request->input('remarques');
        $jury->save();

        // Redirect to a success page or return a response
        return redirect()->route('export')->with('success', 'Jury créé avec succès.');
    }

    /**
     * Display a listing of the jurys.
     */
    public function index()
    {
        $juries = ModelJury::all();
        return view('pages.jury', compact('juries'));
    }
}
