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
        Schema::create('seat', function (Blueprint $table) {
            $table->id();
            $table->integer('hall_id');
            $table->integer('row_num');
            $table->integer('seat_num');
            $table->string('price_category', 100);
            $table->foreign('hall_id')->references('id')->on('hall')->cascadeOnDelete();        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat');
    }
};
