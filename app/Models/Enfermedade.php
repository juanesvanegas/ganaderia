<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedade extends Model
{
    use HasFactory;

    protected $filliable = [
        'fecha_inicio',
        'tipo_enfermedad',
        'avance',
        'animal'
    ];

    public function animals(){

        return $this->belongsTo('App\Models\Animal','animal','id');
    }
}
