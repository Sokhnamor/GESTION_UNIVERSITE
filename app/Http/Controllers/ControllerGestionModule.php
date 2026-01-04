<?php

namespace App\Http\Controllers;

use App\Models\filiere;
use App\Models\module;
use App\Models\semestre;
use Illuminate\Http\Request;


class ControllerGestionModule extends Controller
{
    public function module()
    {
        return view('gestionModule');
    }



    public function store(Request $request){
      
        $module = new module();
        $module->code = $request->input('code');
        $module->module = $request->input('module');
        $module->statut = $request->input('statut');
        // $module->semestre_code = $request->input('semestre');
        // $module->filiere_code = $request->input('filiere');
        $module->responsable_code = 1;

        $semestre=semestre::findOrFail( $request->input('semestre'));
        $filiere=filiere::findOrFail( $request->input('filiere'));

        $module->filiere()->associate($filiere);
        $module->semestre()->associate($semestre);
        


      

        $module->save();
        return redirect()->route('gestionModule')->with('success', 'Form submitted successfully!');
    }
}
