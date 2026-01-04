<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class semestre extends Model
{
    protected $table = 'semestre';
    public $timestamps = true;
    protected $fillable = [
        'code',
        'lebelle',
        'niveau',
        'annee_academique',
        
    ];

     public function module(){
        return $this->hasmany(module::class);
    }

}
