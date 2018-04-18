<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exercicios;

class ExerciciosController extends Controller
{
    public function index(){
    	$res = (Exercicios::pluck('descricao','id'));

    return view('treino.form', ['res'=> $res]);
    }
    
}
