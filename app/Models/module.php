<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class module extends Model
{
    protected $table = 'modules';


    public $timestamps = true;

    protected $fillable = [
        'code',
        'module',
        'statut',
        'semestre_code',
        'filiere_code',
        'responsable_code',

    ];

    public function filiere(){
        return $this->belongsto(Filiere::class , 'filiere_code');
               
    }

    public function semestre(){
        return $this->belongsTo(semestre::class , 'semestre_code');

    }

    public function responsable(){
        return $this->belongsTo(responsable::class , 'responsable_code');
    }
}
    
