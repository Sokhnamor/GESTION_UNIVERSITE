<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDashboard extends Controller
{
    //
    public function board()
    {
        // return view('dashboard');
        if (!session('connected')) {
            return redirect()->route('connexion');
        }

        return view('dashboard');
    }
    
}
