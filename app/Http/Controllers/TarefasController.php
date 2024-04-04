<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tarefa;

class TarefasController extends Controller
{
    public function index(){

        $listaDeTarefas = Tarefa::all();

        return view('todo.index', compact('listaDeTarefas'));
    }
}
