<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notes extends Controller
{
    public function note(){
        return (view('pages.notes'));
    }
}
