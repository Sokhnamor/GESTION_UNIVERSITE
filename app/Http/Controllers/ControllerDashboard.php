<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDashboard extends Controller
{
    //
    public function mor()
    {
        // return view('dashboard');
        if (!session('connected')) {
            return redirect()->route('connexion');
        }

        return view('dashboard');
    }
    
}
