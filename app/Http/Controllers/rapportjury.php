<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rapportjury extends Controller
{
    public function rapport()
    {
        return view('pages.rapport-jury');
    }
}
