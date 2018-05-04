<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\treino;

class testeController extends Controller {

    public function index() {
        $treino = treino::where('nome', 'treino A')->get()->first();
        echo $treino->nome;

        $exercicios = $treino->exercicios;
        foreach ($exercicios as $key) {
            echo $key->descricao;
        }
    }

    public function insert() {

        $data = [4, 5, 6];
        $treino = treino::find(1);
        echo "<br>{$treino->nome}<br>";

        $treino->exercicios()->attach($data);
    }

}
