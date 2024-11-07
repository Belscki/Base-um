<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaginaMainController;
use App\Http\Middleware\checkIsLogged;
use App\Http\Middleware\checkIsNotLogged;
use Illuminate\Support\Facades\Route;

// Auth routes - user not logged
Route::middleware([checkIsNotLogged::class])->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
});

// App routes - user logged
Route::middleware([checkIsLogged::class])->group(function () {
    Route::get('/home', [MainController::class, 'index'])->name('home');
    // Route::get('/newNote', [MainController::class, 'newNote'])->name('newnote');
    // Route::post('/newNoteSubmit', [MainController::class, 'newNoteSubmit'])->name('newNoteSubmit');

    // // edit note
    // Route::get('/editNote/{id}', [MainController::class, 'editNote'])->name('edit');
    // Route::post('/editNoteSubmit', [MainController::class, 'editNoteSubmit'])->name('editNoteSubmit');

    // // delete note
    // Route::get('/deleteNote/{id}', [MainController::class, 'deleteNote'])->name('delete');
    // Route::get('deleteNoteConfirm/{id}', [MainController::class, 'deleteNoteConfirm'])->name('deleteConfirm');


    //
    Route::get('/', [PaginaMainController::class, 'mainpage'])->name('mainpage');
    Route::get('/funcionarios', [PaginaMainController::class, 'funcionarios'])->name('funcionarios');
    //
    Route::get('/mainpage/squadpage', [PaginaMainController::class, 'squadpage'])->name('squadpage');
    //
    Route::get('/mainpage/squadpage/squadadd', [PaginaMainController::class, 'squadadd'])->name('squadpage.add');
    Route::get('/mainpage/squadpage/squadedit', [PaginaMainController::class, 'squadedit'])->name('squadpage.edit'); //Tem que passar os parametros e mudar o metodo

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
