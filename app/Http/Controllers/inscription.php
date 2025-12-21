<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscription extends Controller
{
    public function register()
    {
        return view('pages.inscription');
    }

    public function boutton(Request $request)
    {
        session(['connected' => true]);
        return redirect()->route('connexion');
    }
}
