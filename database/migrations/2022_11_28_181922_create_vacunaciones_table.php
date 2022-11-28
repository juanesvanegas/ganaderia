<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacunaciones', function (Blueprint $table) {
            $table->id();
            $table->string('cantidad_usada',25);
            $table->date('fecha_realizacion');
            $table->unsignedBigInteger('nombre_medic');
            $table->unsignedBigInteger('id_animal');
            $table->unsignedBigInteger('id_usuario');

            $table->foreign('nombre_medic')->references('id')->on('medicamentos')->onDelete('cascade');
            $table->foreign('id_animal')->references('id')->on('animals')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacunaciones');
    }
};
