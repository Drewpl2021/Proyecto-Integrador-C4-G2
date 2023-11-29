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
        Schema::create('solicitarcartas', function (Blueprint $table) {
            $table->id();
            $table->string('posibles_actividades');
            $table->string('area_competencia');
            $table->enum('estado',['Aceptado','Proceso'])->default('Proceso');
            $table->unsignedBigInteger('carta_presentacion_id');
            $table->foreign('carta_presentacion_id')->references('id')->on('cartas_presentacions')->onDelete('cascade');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('sede_id');
            $table->foreign('sede_id')->references('id')->on('sedes')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitarcartas');
    }
};
