<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;

class PacienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Paciente::all();
        return view('listaPacientes', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastroPaciente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Paciente();
        $cat->nome = $request->input('nome');
        $cat->sobrenome = $request->input('sobrenome');
        $cat->idade = $request->input('idade');
        $cat->tipo_documento = $request->input('tipo_documento');
        $cat->numero_documento = $request->input('numero_documento');
        $cat->telefone = $request->input('telefone');
        $cat->email = $request->input('email');
        $cat->endereco = $request->input('endereco');
        $cat->bairro = $request->input('bairro');
        $cat->numero = $request->input('numero');
        $cat->cidade = $request->input('cidade');
        $cat->cep = $request->input('cep');
        $cat->save();
        return \redirect('/pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);
        if(isset($paciente)){
            return view('editaPaciente', \compact('paciente'));
        }
        return redirect('/pacientes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::find($id);
        if(isset($paciente)){
        $paciente->nome = $request->input('nome');
        $paciente->sobrenome = $request->input('sobrenome');
        $paciente->idade = $request->input('idade');
        $paciente->tipo_documento = $request->input('tipo_documento');
        $paciente->numero_documento = $request->input('numero_documento');
        $paciente->telefone = $request->input('telefone');
        $paciente->email = $request->input('email');
        $paciente->endereco = $request->input('endereco');
        $paciente->bairro = $request->input('bairro');
        $paciente->numero = $request->input('numero');
        $paciente->cidade = $request->input('cidade');
        $paciente->cep = $request->input('cep');
        $paciente->save();
        return \redirect('/pacientes');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pac = Paciente::find($id);
        if(isset($pac)){
            $pac->delete();
        }
        return redirect('/pacientes');
    }
}
