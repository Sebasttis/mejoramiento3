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
        Schema::create('equipo_partido', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('equipo_id')->nullable();
            $table->foreign('equipo_id')
            ->references('id')->on('equipos')
            ->onDelete('set null');

            $table->unsignedBigInteger('partido_id')->nullable();
            $table->foreign('partido_id')
            ->references('id')->on('partidos')
            ->onDelete('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipo_partido');
    }
};