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
        Schema::create('movie', function (Blueprint $table) {
            $table->id('id_movie');
            $table->string('name_movie', 60);
            $table->string('gender_movie', 30);
            $table->string('classification_movie', 50);
            $table->integer('duration_movie');
            $table->date('date_premiere_movie');
            $table->string('director_movie', 70);
            $table->string('synopsis_movie', 300);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
