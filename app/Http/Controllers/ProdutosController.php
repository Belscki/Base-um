<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produtos::all();
        $quantidades = $produtos->pluck('quantidade')->toArray();
        $nome = $produtos->pluck('nome')->toArray();
        $preco = $produtos->pluck('preço')->toArray();
        // dd($quantidades);
        return view("produtos.index", 
        [
            'produtos' => $produtos,
             'quantidades' => $quantidades,
              'nome' => $nome, 
              'preco' => $preco
              ]) ;

    }

    public function create(Request $request){
        return view("produtos.create");
    }

    public function store(Request $request){
        $data = $request->validate([
            "nome" => 'required',
            'quantidade'=> 'required|numeric',
            "descrição" => "nullable",
            'preço'=> 'required'
        ]);

        $NovoProduto = Produtos::create($data);

        return redirect(route('produto.index'));
    }

    public function edit(Produtos $produto){
            return view('produtos.edit', ['produto'=> $produto]) ;
    }

    public function update(Request $request, Produtos $produto){
        $data = $request->validate([
            "nome" => 'required',
            'quantidade'=> 'required',
            "descrição" => "nullable",
            'preço'=> 'required'
        ]);

        $produto->update($data);

        return redirect(route('produto.index'));
    }

    public function destroy(Produtos $produto){
        $produto->delete();

        return redirect(route('produto.index'));
    }
}
