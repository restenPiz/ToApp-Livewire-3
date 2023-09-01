<?php

namespace App\Livewire;

use Illuminate\Console\View\Components\Task;
use Livewire\Component;
use Request;

class TaskController extends Component
{
    //*Declarando as variaveis que irei usar na aplicacao
    public $task;

    //?Inicio do metodo principal responsavel pela pagina principal
    public function render()
    {
        $tasks=Task::all();

        return view('livewire.task-controller',compact('tasks'));
    }

    //?Inicio do metodo para salvar os dados
    public function save()
    {
        $table=new \App\Models\Task();

        $this->validate([
            'Task'=>'required',
        ]);

        $table=Request::input($this->task);

        $table->save();

        return back();

    }
}
