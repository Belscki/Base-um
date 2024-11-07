<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->integer('matricula');
            $table->string('nome');
            $table->string('cpf_cnpj', 20)->unique();
            $table->string('contratacao')->nullable();
            $table->string('modelo_contratacao')->nullable();
            $table->string('novo_modelo')->nullable();
            $table->string('fee')->nullable();
            $table->string('departamento')->nullable();
            $table->integer('ano')->nullable();
            $table->string('squad')->nullable();
            $table->string('vaga')->nullable();
            $table->enum('billable', ['BILLABLE', 'OVERHEAD']);
            $table->decimal('salario', 10, 2)->nullable();
            $table->decimal('custo', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
