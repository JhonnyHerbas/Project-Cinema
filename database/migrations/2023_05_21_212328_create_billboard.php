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
        Schema::create('billboard', function (Blueprint $table) {
            $table->id('id_billboard');
            $table->unsignedBigInteger('id_movie');
            $table->date('date_billboard');
            $table->time('hour_billboard');

            $table->foreign('id_movie')->references('id_movie')->on('movie');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billboard');
    }
};
