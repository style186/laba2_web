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
            $table->id();
            $table->integer('seSSion_id');
            $table->integer('seat_id');
            $table->string('full_name', 255);
            $table->foreign('seSSion_id')->references('id')->on('seSSions')->cascadeOnDelete();
            $table->foreign('seat_id')->references('id')->on('seat')->cascadeOnDelete();
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
