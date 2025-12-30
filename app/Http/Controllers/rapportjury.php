<?php

namespace App\Http\Controllers;

use App\Models\ModelJury;
use Illuminate\Http\Request;

class rapportjury extends Controller
{
    public function rapport()
    {   
        $listeJury = ModelJury::all(); 
        return view('pages.rapport-jury' , compact('listeJury'));
    }
}
