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
        Schema::create('planejado_receitas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('receita_id')->constrained('receitas')->onDelete('cascade'); // Relaciona com a tabela receitas
            $table->date('data'); // Data no formato Mês/Ano
            $table->decimal('valor', 10, 2); // Valor planejado
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('planejado_receitas');
    }
    
};
