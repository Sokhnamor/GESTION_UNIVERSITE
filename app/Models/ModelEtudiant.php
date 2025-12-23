<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelEtudiant extends Model
{
    //
    protected $table = 'etudiants';
    public $timestamps = false;
     protected $fillable = [
        'matricule',
        'numero_etudiant',
        'nom',
        'prenom',
        'sexe',
        'date_naissance',
        'email',
        'telephone',
        'filiere',
        'niveau',
        'promotion',
        'statut',
    ];
}
