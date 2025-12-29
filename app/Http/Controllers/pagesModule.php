<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesModule extends Controller
{
    public function filiere(){
        return view ('pages.pages_module.filiere');
    }

    public function semestre(){
        return view ('pages.pages_module.semestre');
    }

    public function responsable(){
        return view ('pages.pages_module.responsable');
    }
}
