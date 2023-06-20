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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id("id_pelicula");
            $table->string("titulo",50)->unique();

            $table->unsignedBigInteger('id_genero');
            $table->foreign('id_genero')->references('id_genero')->on('generos');

            $table->unsignedBigInteger('id_clasificacion');

            $table->foreign('id_clasificacion')->references('id_clasificacion')->on('clasificaciones');
            $table->unsignedBigInteger('id_director');
            $table->foreign('id_director')->references('id_director')->on('directores');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
