<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados['tarefas'] = DB::table('tarefa')->orderBy('status')->get();
        $dados['total_tarefas'] = DB::table('tarefa')->count();
        $dados['tarefas_concluidas'] = DB::table('tarefa')->where('status', true)->count();
        return view('index', $dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tarefa' => 'required'
        ], [
            'required' => 'Campo obrigatório!'
        ]);

        Tarefa::create([
            'tarefa' => $request->tarefa
        ]);

        return redirect()->route('tarefa.index')->with('message', 'Tarefa salva com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarefa = Tarefa::destroy($id);
        return redirect()->route('tarefa.index')->with('message', 'Tarefa excluída com sucesso');
    }

    /**
     * 
     * Concluír tarefa
     */
    public function concluirTarefa(Request $request, $id)
    {
        $tarefa = Tarefa::findOrFail($id);
        $tarefa->status = true;
        $tarefa->save();

        return redirect()->route('tarefa.index')->with('message', 'Tarefa concluída com sucesso');
    }
}
