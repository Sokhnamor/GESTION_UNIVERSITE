<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appBAr extends Controller
{
    public function export()
    {
        return view('appBar.bar-export');
    }

    public function gestionModule()
    {
        return view('appBar.bar-gestionModule');
    }
    
}
