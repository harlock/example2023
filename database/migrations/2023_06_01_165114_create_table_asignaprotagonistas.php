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
        Schema::create('asignaprotagonistas', function (Blueprint $table) {
            $table->id("id_asignap");
            $table->unsignedBigInteger('id_pelicula');
            $table->foreign('id_pelicula')->references('id_pelicula')->on('peliculas');
            $table->unsignedBigInteger('id_protagonista');
            $table->foreign('id_protagonista')->references('id_protagonista')->on('protagonistas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignaprotagonistas');
    }
};