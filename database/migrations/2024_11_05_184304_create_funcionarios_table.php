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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->enum('tipo', ['PF', 'PJ']);  // Pessoa Física (PF) ou Pessoa Jurídica (PJ)
            $table->string('cpf_cnpj', 20)->unique(); // CPF ou CNPJ (max 20 caracteres)
            $table->string('squad');
            $table->timestamps(); // created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
};
