@extends('layout.app', ["current" => "pacientes"])

@section('titulo', 'Pacientes')

@section('conteudo')
<main role="main">
        <div class="row">
            <div class="container col-md-12">
                <div class="card border">
                    <div class="card-header dark">
                        <div class="card-title">
                            Listagem de Clientes
                        </div>
                    </div>
                    <div class="card-body">
                    @if(count($cats) > 0)
                        <table class="table table-bordered table-hover" id="tabelaclientes">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Endereço</th>
                                    <th>Telefone</th>
                                    <th>Email</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($cats as $cat)
                                <tr>
                                    <td>{{ $cat->id }}</td>
                                    <td>{{ $cat->nome }}</td>
                                    <td>{{ $cat->endereco }}</td>
                                    <td>{{ $cat->telefone }}</td>
                                    <td>{{ $cat->email }}</td>
                                    <td>
                                        <a href="/paciente/edita/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                                        <a href="/paciente/remove/{{$cat->id}}" class="btn btn-sm btn-danger">Remover</a>
                                        <a href="/paciente/agenda/{{$cat->id}}" class="btn btn-sm btn-success">Agendar</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                    <div class="card-footer text-right">   
                        <a href="/paciente/novo" class="btn btn-primary btn-sm ">Novo</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection