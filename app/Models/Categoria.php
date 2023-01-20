<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{ 
    use HasFactory;
    protected $fillable = [
        'nombre_cat',
        'img'
    ];

    public function archivos(){

        return $this->hasMany('App\Models\Archivo','categoria','id');
    }

}
