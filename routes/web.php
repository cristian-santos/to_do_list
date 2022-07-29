<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(TarefaController::class)->prefix('/')->group(function () {
    Route::get('/{exibirConcluidas?}', 'index')->name('tarefa.index');
    Route::post('/store', 'store')->name('tarefa.store');
    Route::get('/edit/{id}', 'edit')->name('tarefa.edit');
    Route::put('/update/{id}', 'update')->name('tarefa.update');
    Route::get('/destroy/{id}', 'destroy')->name('tarefa.destroy');
    Route::get('/concluir/{id}', 'concluirTarefa')->name('tarefa.concluir');
    Route::get('/reativar/{id}', 'reativarTarefa')->name('tarefa.reativar');
});