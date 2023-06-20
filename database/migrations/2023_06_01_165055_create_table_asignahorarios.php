<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asignahorarios', function (Blueprint $table) {
            $table->id("id_asignah");
            $table->unsignedBigInteger('id_pelicula');
            $table->foreign('id_pelicula')->references('id_pelicula')->on('peliculas');
            $table->unsignedBigInteger('id_horario');
            $table->foreign('id_horario')->references('id_horario')->on('horarios');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignahorarios');
    }
};
