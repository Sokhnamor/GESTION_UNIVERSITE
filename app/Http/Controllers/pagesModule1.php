<?php

namespace App\Http\Controllers;

use App\Models\semestre;
use Illuminate\Http\Request;

class pagesModule1 extends Controller
{
    public function semestre(){
        return view ('pages.pages_module.semestre');
    }



    public function store(Request $request){
      
        $semestre = new semestre();
        $semestre->code = $request->input('code');
        $semestre->libelle = $request->input('libelle');
        $semestre->niveau = $request->input('niveau');
        $semestre->annee_academique = $request->input('annee_academique');
        $semestre->save();
        return redirect()->route('semestre')->with('success', 'Form submitted successfully!');
    }

}
