<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    protected $table = 'modules';

    public $timestamps = true;

    protected $fillable = [
        'code',
        'module',
        'semestre_code',
        'filiere_code',
        'responsable_code',
    ];
}
    