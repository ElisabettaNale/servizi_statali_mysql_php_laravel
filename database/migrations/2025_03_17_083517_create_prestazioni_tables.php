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

        // Table of 'prestazioni offerte'
        Schema::create('prestazioni_offerte', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
            $table->integer('tempo_risparmiato');
            $table->timestamps();
        });

        // Table of 'prestazioni erogate'
        Schema::create('prestazioni_erogate', function (Blueprint $table) {
            $table->id();
            $table->date('data_vendita');
            $table->foreignId('tipologia_id')->constrained('prestazioni_offerte')->onDelete('cascade');
            $table->integer('quantita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestazioni_erogate');
        Schema::dropIfExists('prestazioni_offerte');
    }
};
