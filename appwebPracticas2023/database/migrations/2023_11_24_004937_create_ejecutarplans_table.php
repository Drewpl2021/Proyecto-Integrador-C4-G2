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
        Schema::create('ejecutarplans', function (Blueprint $table) {
            $table->id();
            $table->string('evidencia_inicial');
            $table->string('evidencia_intermedio');
            $table->string('evidencia_final');
            $table->unsignedBigInteger('gestionarplan_id');
            $table->foreign('gestionarplan_id')->references('id')->on('gestionarplans')->onDelete('cascade');
            $table->unsignedBigInteger('practicante_id');
            $table->foreign('practicante_id')->references('id')->on('practicantes')->onDelete('cascade');
            $table->unsignedBigInteger('evaluacione_id');
            $table->foreign('evaluacione_id')->references('id')->on('evaluaciones')->onDelete('cascade');
            $table->unsignedBigInteger('evaluacionempresa_id');
            $table->foreign('evaluacionempresa_id')->references('id')->on('evaluacionempresas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejecutarplans');
    }
};
