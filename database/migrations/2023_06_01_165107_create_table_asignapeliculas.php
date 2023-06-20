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
        Schema::create('asignapeliculas', function (Blueprint $table) {
            $table->id("id_asignap");
            $table->unsignedBigInteger('id_asignah');
            $table->foreign('id_asignah')->references('id_asignah')->on('asignahorarios');
            $table->unsignedBigInteger('id_sala');
            $table->foreign('id_sala')->references('id_sala')->on('salas');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Asignapeliculas');
    }
};
