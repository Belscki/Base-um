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
        Schema::create('planejado_func', function (Blueprint $table) {
            $table->id();
            $table->foreignId('funcionario_id')->constrained('funcionarios')->onDelete('cascade'); // Relaciona com a tabela funcionarios
            $table->date('data'); // Data no formato Mês/Ano (mesmo sendo armazenado no formato de data)
            $table->decimal('valor', 10, 2); // Valor planejado
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('planejado_func');
    }
    
};
