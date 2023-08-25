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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('route_id');
            $table->timestamps();
            $table->string('plate',7);
            $table->string('model',20);
            $table->time('hourLeft');
            //$table->foreign('route_id')->references('id')->on('route');
            $table->foreignId('route_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
