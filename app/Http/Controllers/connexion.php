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

        $veirfy=Auth::attempt($request->only('email', 'password'));
        if ($veirfy) {
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('error', 'Email ou mot de passe incorrect.');
            
        }
        
    }
}
