@extends('layout.app', ["current" => "agenda"])

@section('titulo', 'Agendamento')

@section('conteudo')
<main role="main">
    <div class="row">
        <div class="container col-md-12">
            <div class="card border">
                <div class="card-header dark">
                    <div class="row">
                        <div class="card-title">
                            Agendamento de Pacientes
                        </div>
                        <div style="margin-left:auto">
                            <a href="/paciente/novo" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i>    Novo Paciente</a>
                        </div>
                    </div>
                </div>
                <form action="/agendamento" class="POST">
                @csrf
                    <div class="card-body">                    
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="busca_paciente">Busca Paciente</label>
                                <div class="input-group">
                                    <select class="form-control" id="busca_paciente">
                                        <option selected disabled></option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-secondary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>                          
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label for="tipo_atendimento">Tipo atendimento</label>
                                    <input type="text" class="form-control" name="tipo_atendimento" id="tipo_atendimento"/>
                                </div>
                                
                            </div>
                        </div> 
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="data_agendamento">Dia</label>
                                <input  name="data_agendamento" id="datepicker"/>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="hora_agendamento">Horário</label>
                                <input type="time" name="hora_agendamento" id="timepicker"/>
                            </div>
                            <div class="col-md-4">
                                <div >
                                    <button type="submit" class="btn btn-success btn-sm" style="margin-top:35px"><i class="fas fa-calendar-alt"></i>   Agendar</button>
                                </div>
                            </div>                        
                        </div>                     
                    </div>
                </form>                
            </div>
            <!-- inicio listagem agendamento -->
            <Div>
                <div class="card border" style="margin-top:40px">
                    <div class="card-header">
                        <div class="card-title">
                            Agendamentos do Dia.
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover" id="agenda_dia">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Paciente</th>
                                    <th>Data</th>
                                    <th>Hora</th>
                                    <th>Serviço</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </Div>
        </div>
    </div>    
</main>
@endsection

@section('javascript')
    <script>
         function carregaPacientes() {
            $.getJSON('/api/pacientes', function(data){
                for(i=0; i< data.length; i++){
                    opcao = '<option value ="' + data[i].id + '">' +
                        data[i].nome + '</option>';
                    $('#busca_paciente').append(opcao);
                }                
            });
        }
        $(function (){
            carregaPacientes();
        });
    </script>
@endsection
