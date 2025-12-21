<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class examen extends Controller
{
    public function examen(){
        return (view('pages.examen'));
    }
}
