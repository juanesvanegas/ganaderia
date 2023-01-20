<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    use HasFactory;

    protected $fillable = [

        'archivo',
        'categoria'
    ];

    public function categorias(){

        return $this->belongsTo('App\Models\Categoria','categoria','id');
    }
}
