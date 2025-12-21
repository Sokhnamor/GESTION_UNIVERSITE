<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class etudiant extends Controller
{
    public function etu(){

        return (view('pages.etudiant'));
    }
}
