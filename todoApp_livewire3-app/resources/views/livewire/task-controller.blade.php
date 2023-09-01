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
                            <button class="btn btn-primary" type="button">Editar</button>
                            <button class="btn btn-danger" type="button">Eliminar</button>
                        </div>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                {{ $tasks->links() }}
            </ul>
        </nav>
    
    </div>

</div>
