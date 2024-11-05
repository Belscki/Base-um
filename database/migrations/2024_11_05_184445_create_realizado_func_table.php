<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('realizado_func', function (Blueprint $table) {
            $table->id();
            $table->foreignId('funcionario_id')->constrained('funcionarios')->onDelete('cascade'); // Relaciona com a tabela funcionarios
            $table->date('data'); // Data no formato Mês/Ano
            $table->decimal('valor', 10, 2); // Valor realizado
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('realizado_func');
    }
};
