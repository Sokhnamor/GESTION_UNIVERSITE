<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listeEtudiant extends Controller
{
    public function liste()
    {
        return view('pages.liste-etudiant');
    }
}
