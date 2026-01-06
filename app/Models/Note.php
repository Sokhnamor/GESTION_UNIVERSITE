<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    protected $fillable = [
        'etudiant_id',
        'departement',
        'filiere',
        'semestre',
        'module',
        'note',
        'date_examen',
        'session',
    ];
    public function etudiant()
    {
        return $this->belongsTo(ModelEtudiant::class);
    }
}
