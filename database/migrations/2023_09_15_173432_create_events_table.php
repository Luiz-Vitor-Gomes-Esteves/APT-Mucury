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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('route_id');
            //$table->unsignedBigInteger('causality_id');
            $table->timestamps();
            //$table->foreign('route_id')->references('id')->on('route');
            //$table->foreign('causality_id')->references('id')->on('causality');
            $table->time('time');
            $table->date('date');
            $table->string('local');
            $table->string('description');
            $table->foreignId('route_id')->constrained();
            $table->foreignId('causality_id')->constrained();
            $table->foreignId('bus_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
