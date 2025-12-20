<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerGestionModule extends Controller
{
    public function module()
    {
        return view('gestionModule');
    }
}
