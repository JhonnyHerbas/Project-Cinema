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
        Schema::create('ticket', function (Blueprint $table) {
            $table->id('id_ticket');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_billboard');
            $table->integer('amount_ticket');
            $table->date('date_ticket');
            $table->integer('price_ticket');

            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_billboard')->references('id_billboard')->on('billboard');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
