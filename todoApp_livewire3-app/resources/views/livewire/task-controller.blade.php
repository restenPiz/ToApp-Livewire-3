<div>
    
    {{--Inicio do navbar--}}
    @include('livewire.layouts.navbar')

    {{--Inicio do formulario de submissao--}}
    <div class="container" style="margin-top:3rem">
        <div class="card">
            <div class="container">
                <form action="">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Tarefa</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite a sua tarefa">
                    </div>
        
                    {{--Inicio do butao submit--}}
                    <button type="button" class="btn btn-success">Adicionar Tarefa</button>
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
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
              </tr>
            </tbody>
        </table>
    </div>

</div>
