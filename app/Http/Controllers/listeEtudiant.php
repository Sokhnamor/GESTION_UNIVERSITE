<?php

namespace App\Http\Controllers;

use App\Models\ModelEtudiant;
use Illuminate\Http\Request;

class listeEtudiant extends Controller
{
    public function liste()
    {

        $listeEtudiant = ModelEtudiant::all();

        return view('pages.liste-etudiant' , [ 'listeEtudiant' => $listeEtudiant ]);
            
             
       
    }

    
}
    