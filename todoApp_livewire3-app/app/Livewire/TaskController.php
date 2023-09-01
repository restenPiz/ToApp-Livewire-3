<?php

namespace App\Livewire;

use Illuminate\Console\View\Components\Task;
use Livewire\Component;
use Request;

class TaskController extends Component
{
    //*Declarando as variaveis que irei usar na aplicacao
    public \App\Models\Task $task;

    //?Inicio do metodo principal responsavel pela pagina principal
    public function render()
    {
        $tasks=\App\Models\Task::all();

        return view('livewire.task-controller',compact('tasks'));
    }

    //?Inicio do metodo para salvar os dados
    public function save()
    {
        $table=new \App\Models\Task();

        $this->validate([
            'Task'=>'required',
        ]);

        \App\Models\Task::create(
            $this->task->all()
        );

    }
}
