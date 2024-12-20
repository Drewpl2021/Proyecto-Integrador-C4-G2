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
        Schema::create('contratoempresas', function (Blueprint $table) {
            $table->id();
            $table->string('adjuntar_contrato');
            $table->unsignedBigInteger('cartaaceptacion_id');
            $table->foreign('cartaaceptacion_id')->references('id')->on('cartaaceptacions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratoempresas');
    }
};
