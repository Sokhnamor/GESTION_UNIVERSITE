<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connexion extends Controller
{
    public function connect()
    {
        return view('pages.connexion');
    }

    public function submit(Request $request)
    {
        session(['connected' => true]);
        return redirect()->route('dashboard');
    }
}
