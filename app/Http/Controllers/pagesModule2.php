<?php

namespace App\Http\Controllers;

use App\Models\responsable;
use Illuminate\Http\Request;

class pagesModule2 extends Controller
{
    
    public function responsable(){
        return view ('pages.pages_module.responsable');
    }



    
    public function store(Request $request){
      
        $responsable = new responsable();
        $responsable->code = $request->input('code');
        $responsable->nom_prenom = $request->input('nom_prenom');
        $responsable->email = $request->input('email');
        $responsable->departement = $request->input('departement');
        $responsable->save();
        return redirect()->route('responsable')->with('success', 'Form submitted successfully!');
    }
}
