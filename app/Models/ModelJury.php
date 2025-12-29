<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelJury extends Model
{
    //
    protected $table = 'jury';
    public $timestamps = false;
    protected $fillable = [
        'code_jury',
        'nom_jury',
        'promotion',
        'semestre',
        'session',
        'annee-academique',
        'date',
        'statut',
        'president',
        'secretaire',
        'membres',
        'remarques',
    ];
}
