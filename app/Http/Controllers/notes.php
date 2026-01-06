<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class notes extends Controller
{
    public function note(){
        $notes=Note::with('etudiant')->paginate(5);
        return (view('pages.notes', compact('notes')));
    }
}
