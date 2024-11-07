<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'matricula' => fake()->randomNumber(5),
            'cpf_cnpj' => fake()->randomNumber(5),
            'contratacao' => fake()->randomElement(['SCORE', 'GLOBAL']),
            'modelo_contratacao' => fake()->randomElement(['PJ', 'CLT']),
            'novo_modelo' => fake()->randomElement(['HUB DESENVOLVIMENTO', 'HUB GESTÃO', 'HUB MARKETING']),
            'squad' => fake()->randomElement(['SQUAD_1', 'SQUAD_2', 'SQUAD_3']),
            'vaga' => fake()->randomElement(['DESENVOLVEDOR', 'MARKETING', 'FINANCEIRO']),
            'billable' => fake()->randomElement(['BILLABLE', 'OVERHEAD']),
            'salario' => fake()->randomFloat(2, 1000, 2000),
            'custo' => fake()->randomFloat(2, 2000, 3000)
        ];
    }
}
