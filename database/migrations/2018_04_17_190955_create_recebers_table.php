<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecebersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recebers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('forma_recebimento');
            $table->string('valor');
            $table->date('data_recebimento');
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
        Schema::dropIfExists('recebers');
    }
}
