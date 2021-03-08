<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarbeariaController;


Route::get('/', [BarbeariaController::class, 'home'])->name('home');
Route::get('/contato', [BarbeariaController::class, 'contato'])->name('contato');
Route::get('/sobre', [BarbeariaController::class, 'sobre'])->name('sobre');
Route::get('/servicos', [BarbeariaController::class, 'servicos'])->name('servicos');