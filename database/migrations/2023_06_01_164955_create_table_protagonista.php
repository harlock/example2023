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
        Schema::create('protagonistas', function (Blueprint $table) {
            $table->id("id_protagonista");
            $table->string("nombre_p", 50);
            $table->string("ap_p",50);
            $table->string("am_p",50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('protagonistas');
    }
};