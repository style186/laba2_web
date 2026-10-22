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
        Schema::create('seSSions', function (Blueprint $table) {
            $table->id();
            $table->integer('hall_id');
            $table->integer('movie_id');
            $table->timestamp('start_time_date');
            $table->foreign('hall_id')->references('id')->on('hall')->cascadeOnDelete();
            $table->foreign('movie_id')->references('id')->on('movie')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seSSions');
    }
};
