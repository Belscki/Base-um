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
        Schema::create('rateio', function (Blueprint $table) {
            $table->unsignedBigInteger('id_novo_modelo');
            $table->unsignedBigInteger('id_squad');
            $table->decimal('porcentagem', 5, 2);
            $table->timestamps();

            // Definindo a chave primária composta
            $table->primary(['id_novo_modelo', 'id_squad']);

            // Definindo as chaves estrangeiras
            $table->foreign('id_novo_modelo')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('id_squad')->references('id')->on('squads')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('rateio');
    }
};
