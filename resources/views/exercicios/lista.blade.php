@extends('layouts.app')

@section('content')


<link href="{{asset('css/datatables.css')}}" rel="stylesheet" media="screen">




<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Clientes
                    <a class="pull-right" href="{{url('exercicios/novo')}}">Novo exercício</a>
                </div>

                <div class="panel-body">
                    Listagem de exercícios
                    <!-- Barra de pesquisa -->

                    {!! Form::open(['url'=>'exercicios/pesquisar', 'method' => 'POST', 'class'=> 'navbar-form pull-rigth']) !!}

                    <div class="row">
                        <div class="col-md-10 form-group">

                            {!! Form::text('descricao', null,['class'=>'form-control',  'placeholder'=> 'Buscar', 'aria-describedby' => 'search']) !!}
                        </div>
                        <div class="col-md-2 form-group" >

                            {!! Form::submit('Pesquisar', ['class' =>'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close()!!} 

                    <!--<form method='post' action="{{ url('exercicios/pesquisar') }}" class='form-horizontal'>
                                       {!! csrf_field() !!}
                   <div class="col-md-5">
                                           <input type="text" class="form-control" id="busca" name='busca' placeholder="Busca" value="{{ old('busca') }}" />
                                       </div>
                                       <label for="nome" class="col-sm-2 control-label">Buscar por:</label>
                                       <div class="col-sm-3">
                                       <select class='form-control' name='tipo_busca'>
                                           <option value='nome'>Nome</option>
                                           <option value="ficha_atendimento">Ficha Atendimento</option>
                                           <option value="id">Código</option>
                                       </select>
                                   </div>
                                       <div class="col-md-2">
                                           <button type='submit' class='btn btn-primary pull-right'>
                                           <i class='glyphicon glyphicon-search'></i>
                                               Buscar
                                           </button>
                                       </div>
                                   </form>
                    -->


                    <table  id="table_id" class="table">
                        <tread>
                            <th>Descrição</th>
                            <th>grupo</th>







                            <th>Ações</th>
                        </tread>
                        <tbody>
                            @foreach($Exercicios as $exercicio)
                            <tr>
                                <td>{{ $exercicio->descricao}}</td>



                                <td>{{ $exercicio->grupo}}</td>






                                <td>
                                    <a href="/exercicios/{{ $exercicio-> id}}/editar" class="btn btn-default btn-sm">Editar</a>
                                    <a href="/exercicios/{{ $exercicio-> id}}/excluir" class="btn btn-default btn-sm">Excluir</a>

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
<script src="{{ asset('js/datatables.js') }}"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('#table_id').DataTable();
});
</script>


@endsection
