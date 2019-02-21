@extends('layout.app', ["current" => "pacientes"])

@section('titulo', 'Editar Paciente')

@section('conteudo')
<main role="main">
        <div class="row">
            <div class="container col-md-12">
                <div class="card border">
                    <div class="card-header dark">
                        <div class="card-title">
                            Cadastro de Paciente.
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/paciente/{{ $paciente->id }}" method="POST">
                        @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="nome">Nome</label>
                                        <input type="text" name="nome" value="{{ $paciente->nome }}"
                                            id="nome" class="form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}">
                                        @if($errors->has('nome'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('nome')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                    <label for="sobrenome">Sobrenome</label>
                                        <input type="text" name="sobrenome" value="{{ $paciente->sobrenome }}"
                                            id="sobrenome" class="form-control {{ $errors->has('sobrenome') ? 'is-invalid' : ''}}">
                                        @if($errors->has('sobrenome'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('sobrenome')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-2">
                                        <label for="sexo">Sexo</label>
                                        <select name="sexo" id="sexo" value="{{ $paciente->sexo }}" 
                                                class="form-control {{ $errors->has('sexo') ? 'is-invalid' : '' }}">
                                            <option value="0"></option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Feminino</option>
                                            <option value="3">Outro</option>
                                        </select>
                                        @if($errors->has('sexo'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('sexo')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-2">
                                        <label for="idade">Idade</label>
                                        <input type="number" name="idade" id="idade" value="{{ $paciente->idade }}" 
                                                class="form-control {{ $errors->has('idade') ? 'is-invalid' : ''}}">
                                        @if($errors->has('idade'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('idade')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--Linha 2 -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="tipo_documento">Documento</label>
                                        <select name="tipo_documento" id="tipo_documento" value="{{ $paciente->tipo_documento }}" 
                                                class="form-control {{ $errors->has('tipo_documento') ? 'is-invalid' : '' }}">
                                            <option value="0"></option>
                                            <option value="1">RG</option>
                                            <option value="2">CPF</option>
                                        </select>
                                        @if($errors->has('tipodocumento'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('tipodocumento')}}
                                        </div>
                                        @endif
                                    </div>   
                                    <div class="col-md-3">
                                        <label for="numero_documento">Numero documento</label>
                                        <input type="number" id="numero_documento" name="numero_documento" value="{{ $paciente->numero_documento }}"
                                                class="form-control {{ $errors->has('numero_documento') ? 'is-invalid' : ''}}">
                                        @if($errors->has('numero_documento'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('numero_documento')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <label for="telefone">Telefone</label>
                                        <input type="number" id="telefone" name="telefone" value="{{ $paciente->telefone }}"
                                                class="form-control {{ $errors->has('telefone') ? 'is-invalid' : ''}}">
                                        @if($errors->has('telefone'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('telefone')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" value="{{ $paciente->email }}"
                                                class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}">
                                        @if($errors->has('email'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('email')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <hr>
                           <!--Final grupo dados pacientes -->
                           <!--Inicio grupo endereço -->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="endereco">Endereco</label>
                                        <input type="text" value="{{ $paciente->endereco }}"
                                                class="form-control {{ $errors->has('endereco') ? 'is-invalid' : ''}}" name="endereco" 
                                        id="endereco">
                                        @if($errors->has('endereco'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('endereco')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-5">
                                        <label for="bairro">Bairro</label>
                                        <input type="text" value="{{ $paciente->bairro }}"
                                                class="form-control {{ $errors->has('bairro') ? 'is-invalid' : ''}}" name="bairro" 
                                        id="bairro">
                                        @if($errors->has('bairro'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('bairro')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-2">
                                        <label for="numero">Número</label>
                                        <input type="number" value="{{ $paciente->numero }}"
                                                class="form-control {{ $errors->has('numero') ? 'is-invalid' : ''}}" name="numero" 
                                        id="numero">
                                        @if($errors->has('numero'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('numero')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>                                                              
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="cidade">Cidade</label>
                                        <input type="text" value="{{ $paciente->cidade }}"
                                                class="form-control {{ $errors->has('cidade') ? 'is-invalid' : ''}}" name="cidade" 
                                        id="cidade">
                                        @if($errors->has('cidade'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('cidade')}}
                                        </div>
                                        @endif
                                    </div>
                                    <div class="col-md-5">
                                        <label for="cep">CEP</label>
                                        <input type="text" value="{{ $paciente->cep }}"
                                                class="form-control {{ $errors->has('cep') ? 'is-invalid' : ''}}" name="cep" 
                                        id="cep">
                                        @if($errors->has('cep'))
                                        <div class='invalid-feedback'>
                                            {{$errors->first('cep')}}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-muted text-right">
                                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
                            </div>
                        </form>                        
                    </div>
                 </div>
            </div>
        </div>
    </main>
@endsection