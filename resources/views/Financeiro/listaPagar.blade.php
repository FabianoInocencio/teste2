@extends('layouts.app')

@section('content')


<link href="{{asset('css/datatables.css')}}" rel="stylesheet" media="screen">

    


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Contas
                	<a class="pull-right" href="{{url('pagar/novo')}}">Nova Conta a Pagar</a>
                </div>

                <div class="panel-body">
                   Listagem de Contas a Pagar
                  <!-- Barra de pesquisa -->
                 {!! Form::open(['url'=>'pagar/pesquisar', 'method' => 'POST', 'class'=> 'navbar-form pull-rigth']) !!}
                 

                  <div class="row">
                <div class="col-md-10 form-group">
                    {!! Form::text('descricao', null,['class'=>'form-control',  'placeholder'=> 'Buscar', 'aria-describedby' => 'search']) !!}
                   </div>
                   <div class="col-md-2 form-group" >

                     {!! Form::submit('Pesquisar', ['class' =>'btn btn-primary']) !!}
                 </div>
                </div>
                
                {!! Form::close()!!} 


 
                   
                   <table  id="table_id" class="table">
                        <tread>
                        <th>Favorecido</th>
                        <th>Descrição</th>
                        <th>Data Vecimento</th>
                        <th>Valor</th>
                        <th>Situação</th>
                        <th>Ações</th>
                        </tread>
                        <tbody>
                            @foreach($Conta_pagar as $conta)
                            <tr>
                                <td>{{ $conta->favorecido}}</td>
                                <td>{{ $conta->descricao}}</td>
                                <td>{{ $conta->data_vencimento}}</td>
                                <td>{{ $conta->valor}}</td>
                                <td>{{ $conta->situacao}}</td>
                               
                                
                                <td>
                                    <a href="/pagar/{{ $conta-> id}}/editar" class="btn btn-default btn-sm">Editar</a>
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
<script src="{{ asset('js/datatables.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('#table_id').DataTable();
});
</script>


@endsection
