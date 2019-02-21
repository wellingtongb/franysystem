<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->string('sobrenome', 100);
            $table->integer('idade');
            $table->integer('sexo')->nullable();
            $table->integer('tipo_documento');
            $table->integer('numero_documento');
            $table->string('telefone');
            $table->string('email');
            $table->string('endereco',150);
            $table->string('bairro',150);
            $table->integer('numero');
            $table->string('cidade',150);
            $table->integer('cep');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
