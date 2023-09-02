<div>
    
    {{--Inicio do navbar--}}
    @include('livewire.layouts.navbar')

    {{--Inicio do formulario de submissao--}}
    <div class="container" style="margin-top:3rem">
        <div class="card">
            <div class="container">
                <form wire:submit="save">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tarefa</label>
                        <input wire:model="Task" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite a sua tarefa">
                    </div>
        
                    {{--Inicio do butao submit--}}
                    <button type="submit" class="btn btn-success">Adicionar Tarefa</button>
                </form><br>
            </div>
        </div>
    </div>

    {{--Inicio do titulo--}}
    <div class="container" style="margin-top:5rem">
        <h1>Todas Tarefas</h1>
    </div>

    {{--Inicio da tabela responsavel por listar os dados--}}
    <div class="container">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tarefa</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{$task->id}}</th>
                    <td>{{$task->Task}}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-block">
                            <button data-bs-toggle="modal" data-bs-target="#showEditModal" wire:click="openEditModal({{ $task->id }})" class="btn btn-primary" type="button">Editar</button>
                            <button wire:click="openDeleteModal({{ $task->id }})" class="btn btn-danger" type="submit">Eliminar</button>
                        </div>
                    </td>
                </tr>

                {{--Inicio do modal de editar--}}

                @if($showEditModal)
                    <div wire:ignore.self class="modal fade" id="showEditModal" tabindex="-1" aria-labelledby="showEditModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Editar Tarefa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Adicione seus campos de edição aqui -->
                                    <input wire:model="Task" value="{{$task->Task}}" type="text" class="form-control">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button wire:click="update" class="btn btn-primary">Salvar Alterações</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

              @endforeach
            </tbody>
        </table>
    
    </div>

</div>
