<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedade extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_inicio',
        'tipo_enfermedad',
        'tipo_diagnostico',
        'muerte',
        'soporte',
        'animal'
    ];

    public function animals(){

        return $this->belongsTo('App\Models\Animal','animal','id');
    }
}
