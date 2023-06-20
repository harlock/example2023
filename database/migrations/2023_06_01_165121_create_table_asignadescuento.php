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
        Schema::create('asignadescuento', function (Blueprint $table) {
            $table->id("id_asignad");
            $table->unsignedBigInteger('id_cine');
            $table->foreign('id_cine')->references('id_cine')->on('cines');
            $table->unsignedBigInteger('id_descuento');
            $table->foreign('id_descuento')->references('id_descuento')->on('descuentos');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignadescuento');
    }
};
