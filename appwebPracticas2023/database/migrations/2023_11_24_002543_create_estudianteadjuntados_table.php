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
        Schema::create('estudianteadjuntados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carta_presentacion_id');
            $table->foreign('carta_presentacion_id')->references('id')->on('cartas_presentacions')->onDelete('cascade');
            $table->unsignedBigInteger('student_convocatoy_id');
            $table->foreign('student_convocatoy_id')->references('id')->on('student_convocatories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudianteadjuntados');
    }
};
