<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelJury extends Model
{
    //
    protected $fillable = [
        'code_jury',
        'nom_jury',
        'promotion',
        'semestre',
        'session',
        'annee_academique',
        'date_deliberation',
        'statut',
        'president',
        'secretaire',
        'membres',
        'remarques',
    ];
}
