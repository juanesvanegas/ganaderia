<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'identificador',
        'peso',
        'tipo_animal',
        'raza',
        'fecha_nacimiento'

    ];
    public function enfermedades(){

        return $this->hasMany('App\Models\Enfermedade','animal','id');
    }

    public function vacunaciones(){

        return $this->hasMany('App\Models\Vacunacione','id_animal','id');
    }
}
