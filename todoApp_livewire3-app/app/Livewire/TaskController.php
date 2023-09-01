<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;
use Request;

class TaskController extends Component
{
    //*Declarando as variaveis que irei usar na aplicacao
    public $Task;

    public $id;

    public $showDeleteModal=false;

    public $showEditModal=false;

    //?Inicio do metodo principal responsavel pela pagina principal
    public function render()
    {
        $tasks=\App\Models\Task::all();

        return view('livewire.task-controller',compact('tasks'));
    }

    //?Inicio do metodo para salvar os dados
    public function save()
    {
        $this->validate([
            'Task'=>'required',
        ]);

        /*
        \App\Models\Task::create(
            [
                'Task'=>$this->Task,
            ]
        );
        */
        $table=new Task();

        $table->Task=$this->Task;

        $table->save();

        $this->Task='';
    }

    //?Inicio do modal para editar os dados
    public function openEditModal($id)
    {
        $this->id=$id;

        $this->showEditModal=true;
    }
    
    //?Inicio do modal para eliminar
    public function openDeleteModal($id)
    {
        $this->id=$id;

        $this->showDeleteModal=true;
    }
}

