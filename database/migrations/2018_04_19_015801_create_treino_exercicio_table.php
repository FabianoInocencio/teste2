<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreinoExercicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treino_exercicio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('treino_id')->unsigned();
            $table->integer('exercicio_id')->unsigned();

            $table->foreign('treino_id')->references('id')->on('treinos')->onDelete('cascade');

             $table->foreign('exercicio_id')->references('id')->on('exercicios')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treino_exercicio');
    }
}
