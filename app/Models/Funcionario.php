<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'funcionarios';

    protected $fillable = [
        'matricula',
        'nome',
        'cpf_cnpj',
        'contratacao',
        'modelo_contratacao',
        'novo_modelo',
        'fee',
        'departamento',
        'ano',
        'squad',
        'vaga',
        'billable',
        'salario',
        'custo',
    ];
}
