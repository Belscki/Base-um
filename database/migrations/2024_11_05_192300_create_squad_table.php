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
        Schema::create('squad', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('squad_1');
            $table->integer('squad_2');
            $table->integer('squad_3');
            $table->integer('squad_4');
            $table->integer('squad_5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('squad');
    }
};
