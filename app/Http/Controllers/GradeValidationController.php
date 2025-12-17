<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeValidationController extends Controller
{
    public function index()
    {
        return view('pages.grades-validation');
    }

}
