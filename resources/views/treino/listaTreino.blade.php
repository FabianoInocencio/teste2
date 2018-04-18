@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Treinos
                	<a class="pull-right" href="{{url('treino')}}">Novo Treino</a>
                </div>

                <div class="panel-body">
                   Listagem de treinos
                   <table class="table">
                        <th>Nome</th>
                        <th>Repetições</th>
                        <th>Carga</th>
                        <th>Intervalo</th>
                        <th>Ações</th>
                        <tbody>
                            @foreach($treinos as $treino)
                            <tr>
                                <td>{{ $treino->nome}}</td>
                                <td>{{ $treino->repeticoes}}</td>
                                <td>{{ $treino->carga}}</td>
                                <td>{{ $treino->intervalo}}</td>
                                <td>
                                    <a href="/treino/{{ $treino-> id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                    <button class="btn btn-sm">Excluir</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
