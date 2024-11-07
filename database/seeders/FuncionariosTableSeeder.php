<?php

namespace Database\Seeders;

use App\Models\Funcionario;
use Database\Factories\funcionariosFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuncionariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Funcionario::factory(50)->create();
        //
        // DB::table('funcionarios')->insert([
        //     [
        //         'nome' => "teste",
        //         'matricula' => 123,
        //         'cpf_cnpj' => 12345678910,
        //         'contratacao' => "c",
        //         'modelo_contratacao' => "m",
        //         'novo_modelo' => "n",
        //         'squad' => "s",
        //         'vaga' => "v",
        //         'billable' => "Billable",
        //         'salario' => "1000",
        //         'custo' => "2000",
        //         'cpf_cnpj' => date('Y-m-d H:i:s')
        //     ],
        // ]);
    }
}
