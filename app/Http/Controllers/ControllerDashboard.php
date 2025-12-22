<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class ControllerDashboard extends Controller
{
    //
    public function board()
    {
    
        return view('dashboard');

    }
    
}
