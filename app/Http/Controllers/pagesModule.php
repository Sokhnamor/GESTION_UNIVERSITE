<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;

class pagesModule extends Controller
{
    public function filiere(){
        return view ('pages.pages_module.filiere');
    }


    public function store(Request $request){
      
        $filiere = new Filiere();
        $filiere->code = $request->input('code');
        $filiere->nom = $request->input('nom_filiere');
        $filiere->departement = $request->input('departement');
        $filiere->niveau_etude = $request->input('niveau_etude');
        $filiere->save();
        return redirect()->route('filiere')->with('success', 'Form submitted successfully!');
    }






  


    

}



