@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                
       
                <div class="panel-heading">
                	informe os dados do Treino
                	<a class="pull-right" href="{{url('treino.lista')}}">Listagem treino</a>
                </div>

                <div class="panel-body">
                @if(Session::has('mensagem_sucesso'))
                    <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
                    @endif

                   Formulário

                    @if(Request::is('*/editar'))
                        {!! Form::model($treino, ['method' => 'PATCH', 'url'=> 'treino/'.$treino->id]) !!}
                    @else

                   {!! Form::open(['url'=>'treino/salvar']) !!}

                   @endif


                    <div class="container">
            @yield('content')
        </div>
                <div class="row">

                <div class="col-md-5 form-group">
                    {!! Form::label('exercicios_id', 'Exercícios') !!}
                    <!--{!! Form::text('sexo', old('sexo'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!} -->
                    {!! Form::select('exercicios_id', $res, null, ['class' => 'form-control', 'placeholder' => '']) !!}
                   
                    <p class="help-block"></p>
                    @if($errors->has('exercicios_id'))
                        <p class="help-block">
                            {{ $errors->first('exercicios_id') }}
                        </p>
                    @endif
                </div>
            


              <div class="col-md-4 form-group">
                  {!! Form::label('nome', 'Nome') !!}
                   
                    {!! Form::text('nome', old('nome'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nome'))
                        <p class="help-block">
                            {{ $errors->first('nome') }}
                        </p>
                    @endif
                </div>
</div>
<div class="row">

                <div class="col-md-4 form-group">
                  {!! Form::label('repeticoes', 'Repetições') !!}
                   
                    {!! Form::text('repeticoes', old('repeticoes'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('repeticoes'))
                        <p class="help-block">
                            {{ $errors->first('repeticoes') }}
                        </p>
                    @endif
                </div>


                <div class="col-md-4 form-group">
                  {!! Form::label('carga', 'Carga') !!}
                   
                    {!! Form::text('carga', old('carga'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('carga'))
                        <p class="help-block">
                            {{ $errors->first('carga') }}
                        </p>
                    @endif
                </div>
               
               <div class="col-md-4 form-group">
                  {!! Form::label('metodo', 'Método') !!}
                   
                    {!! Form::text('metodo', old('metodo'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('metodo'))
                        <p class="help-block">
                            {{ $errors->first('metodo') }}
                        </p>
                    @endif
                </div>
            </div>

                   {!! Form::submit('salvar', ['class' =>'btn btn-primary']) !!}
{!! Form::close() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
            


@endsection
