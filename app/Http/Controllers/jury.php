<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jury extends Controller
{
    public function jury(){
        return (view('pages.jury'));
    }
}
