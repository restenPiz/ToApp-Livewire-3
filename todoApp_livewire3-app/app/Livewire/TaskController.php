<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Component;
use App\Livewire;
use Alert;

class TaskController extends Component
{
    //*Declarando as variaveis que irei usar na aplicacao
    public $Task, $editedTask, $id;
    public $showEditModal=false;

    //?Inicio do metodo principal responsavel pela pagina principal
    public function render()
    {
        $tasks=Task::all();

        return view('livewire.task-controller',compact('tasks'));
    }

    //?Inicio do metodo para salvar os dados
    public function save()
    {
        $this->validate([
            'Task'=>'required',
        ]);

        $table=new Task();

        $table->Task=$this->Task;

        $table->save();

        $this->Task='';

        Alert::success('Adicionado','A tarefa foi adicionado com sucesso!');
    }

    //?Inicio do modal para editar os dados
    public function openEditModal($id)
    {
        $this->id=$id;

        $this->showEditModal=true;

        $task=Task::find($id);

        $this->editedTask = $task->Task;
    }
    
    //?Inicio da funcao para eliminar
    public function openDeleteModal($id)
    {
        $task = Task::find($id);

        $task->delete();
    }

    //?Inicio da funcao para editar os dados
    public function update()
    {
        $task=Task::find($this->id);

        $task->Task=$this->editedTask;

        $task->save();   
        
        //*Metodo para fechar o modal
        $this->showEditModal=false;

    }
}

