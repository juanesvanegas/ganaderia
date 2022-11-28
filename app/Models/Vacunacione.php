<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacunacione extends Model
{
    use HasFactory;
    protected $filliable = [
        
        'cantidad_usada',
        'fecha_realizacion',
        'nombre_medic',
        'id_animal',
        'id_usuario'
    ];

    public function medicamentos(){

        return $this->belongsTo('App\Models\Medicamento','nombre_medic','id');
    }

    public function animals(){

        return $this->belongsTo('App\Models\Animal','id_animal','id');
    }

    public function users(){

        return $this->belongsTo('App\Models\User','id_usuario','id');
    }
}
