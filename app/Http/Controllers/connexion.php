<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class connexion extends Controller
{
    public function connect()
    {
        return view('pages.connexion');
    }

    public function submit(Request $request)
    {

        Auth::attempt($request->only('email', 'password'));
        if (!Auth::check()) {
            return redirect()->route('connexion')->with('error', 'Email ou mot de passe incorrect.');
        }
        
        return redirect()->route('dashboard');
    }
}
