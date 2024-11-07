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
        Schema::create('func_empresa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_empresa');
            $table->unsignedBigInteger('id_funcionario');
            $table->decimal('porcentagem', 5, 2);
            $table->timestamps();

            // Definindo a chave primária composta
            $table->primary(['id_empresa', 'id_funcionario']);

            // Definindo as chaves estrangeiras
            $table->foreign('id_empresa')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('id_funcionario')->references('id')->on('funcionarios')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('func_empresa');
    }
};
