<?php

namespace App\Models;

use Carbon\Traits\Timestamp;
use Illuminate\Database\Eloquent\Model;

class responsable extends Model
{
    protected $table = 'responsable';

    public $timestamps = false ;

    public $fillable = [
        'code',
        'nom_prenom',
        'email',
        'departement',
    ];

    public function module(){
        return $this->hasmany(module::class);
    }


}
