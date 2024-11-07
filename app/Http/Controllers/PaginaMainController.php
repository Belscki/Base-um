<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;

class PaginaMainController extends Controller
{
    public function mainpage(){
        $funcionarios = Funcionario::all();
        $custoMes = Funcionario::sum("custo");
        $custoTotal = $custoMes * 12;

        // dd($funcionarios);

        return view('mainpage', ["custoTotal" => $custoTotal, "custoMes" => $custoMes, "funcionarios" => $funcionarios]);
    }

    public function squadpage(){
        return view('squadpage');
    }

    public function funcionarios(){
        $funcionarios = Funcionario::paginate(10);

        return view('listagem.funcionario', ["funcionarios" => $funcionarios]);
    }

    public function squadadd(){
        return view('squadadd');
    }

    public function squadedit(){
        return view('squadedit');
    }
}
