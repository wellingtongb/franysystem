@extends('layout.app', ["current" => "pacientes"])

@section('titulo', 'Pacientes')

@section('conteudo')
<main role="main">
        <div class="row">
            <div class="container col-md-12">
                <div class="card border">
                    <div class="card-header dark">
                        <div class="row">
                            <div class="card-title">
                                Listagem de Clientes
                            </div>
                            <div text-align="right">
                                <a href="/paciente/novo" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i></a>
                            </div>
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
                                    <td style="width: 16.66%" align="center">
                                        <a href="/paciente/edita/{{$cat->id}}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                        <a href="/paciente/remove/{{$cat->id}}" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                                        <a href="/paciente/agenda/{{$cat->id}}" class="btn btn-sm btn-success"><i class="fas fa-calendar-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection