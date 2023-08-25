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
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('favorites');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('route_id')->constrained();
            //$table->unsignedBigInteger('user_id');
            //$table->unsignedBigInteger('route_id');
            //$table->foreign('route_id')->references('id')->on('route');
            //$table->foreign('user_id')->references('id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
