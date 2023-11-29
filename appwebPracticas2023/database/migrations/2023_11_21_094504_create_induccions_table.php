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
        Schema::create('induccions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('detalle');
            $table->string('encargardo');
            $table->string('hora');
            $table->date('fecha');
            $table->string('zoom');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('induccions');
    }
};
