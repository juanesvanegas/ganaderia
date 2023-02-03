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
        Schema::create('enfermedades', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicio');
            $table->string('tipo_enfermedad',30);
            $table->string('tipo_diagnostico',30)->nullable();
            $table->string('muerte',30);
            $table->string('soporte',100)->nullable();
            $table->unsignedBigInteger('animal');

            $table->foreign('animal')->references('id')->on('animals')->onDelete('cascade');
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
        Schema::dropIfExists('enfermedades');
    }
};
