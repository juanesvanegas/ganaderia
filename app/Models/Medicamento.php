<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    use HasFactory;
    protected $filliable = [
        'nombre_medic',
        'dosis_medic',
        'medio_admin',
        'fecha_cadu'
    ];

    public function vacunaciones(){

        return $this->hasMany('App\Models\Vacunacione','nombre_medic','id');
    }
}
