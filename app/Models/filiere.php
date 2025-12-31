<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    protected $table = 'filieres';
    public $timestamps = true;
    protected $fillable = [
        'code',
        'nom_filiere',
        'departement',
        'niveau_etude',
    ];
}
