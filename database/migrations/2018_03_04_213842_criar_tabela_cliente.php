<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       

        if(! Schema::hasTable('clientes')) {
            Schema::create('clientes', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nome');
                $table->string('sexo')->nullable();
                $table->date('nascimento')->nullable();
                $table->string('cpf')->nullable();
                $table->string('rg')->nullable();
                $table->string('orgao_espedidor')->nullable();
                $table->string('uf')->nullable();
                $table->string('telefone')->nullable();
                $table->string('endereco')->nullable();
                $table->string('complemento')->nullable();
                $table->string('numero')->nullable();
                $table->string('cidade')->nullable();
                $table->string('cep')->nullable();
                $table->string('estado')->nullable();
                $table->string('email')->nullable();
                $table->string('foto')->nullable();
                $table->string('situacao')->nullable();
                $table->tinyInteger('motivo')->nullable();
                $table->tinyInteger('treino')->nullable();
                $table->tinyInteger('doenca')->nullable();
                
                $table->timestamps();
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
}
