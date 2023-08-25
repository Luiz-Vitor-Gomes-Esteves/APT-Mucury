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
        Schema::create('mcard', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('user_id'); // Adicione esta linha para criar a coluna user_id
            $table->timestamps();
            $table->integer('cod');
            $table->date('dateEmission');
            $table->float('credits');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('mcard_type_id')->constrained();
            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mcard');
    }
};
