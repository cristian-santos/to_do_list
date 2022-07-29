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

Route::get('/', [TarefaController::class, 'index'])->name('tarefa.index');
Route::post('/store', [TarefaController::class, 'store'])->name('tarefa.store');
Route::get('/concluir/{id}', [TarefaController::class, 'concluirTarefa'])->name('tarefa.concluir');
Route::get('/reativar/{id}', [TarefaController::class, 'reativarTarefa'])->name('tarefa.reativar');
Route::get('/destroy/{id}', [TarefaController::class, 'destroy'])->name('tarefa.destroy');
Route::get('/edit/{id}', [TarefaController::class, 'edit'])->name('tarefa.edit');
Route::put('/update/{id}', [TarefaController::class, 'update'])->name('tarefa.update');