<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContaPagar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conta_pagar', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('favorecido');
            $table->string('forma_pagamento');
            $table->string('valor');
            $table->date('data_pagamento');
            $table->date('data_vencimento');
            $table->string('situacao');
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
        Schema::dropIfExists('conta_pagar');
    }
}


