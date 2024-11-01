<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login' , function(){
    return view('login');
});

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produto.index');  
Route::get('/produtos/create', [ProdutosController::class,'create'])->name(   'produto.create');
Route::post('/produtos/', [ProdutosController::class,'store'])->name(   'produto.store');
Route::get('/produtos/{produto}/Editar', [ProdutosController::class,'edit'])->name(   'produto.editar');
Route::put('/produtos/{produto}/Atualizar', [ProdutosController::class,'update'])->name(   'produto.atualizar');
Route::delete('/produtos/{produto}/Deletar', [ProdutosController::class,'destroy'])->name(   'produto.destruir');