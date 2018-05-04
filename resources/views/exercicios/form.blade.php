@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-heading">
                    informe os dados do Exercício
                    <a class="pull-right" href="{{url('exercicios')}}">Listagem exercícios</a>
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                    <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
                    @endif

                    Formulário

                    @if(Request::is('*/editar'))
                    {!! Form::model($Exercicios, ['method' => 'PATCH', 'url'=> 'exercicios/'.$Exercicios->id]) !!}
                    @else

                    {!! Form::open(['url'=>'exercicios/salvar']) !!}

                    @endif




                    <div class="container">
                        @yield('content')
                    </div>


                    <div class="row">
                        <div class="col-md-4 form-group">
                            {!! Form::label('descricao', 'Descrição') !!}

                            {!! Form::text('descricao', old('descricao'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                            <p class="help-block"></p>
                            @if($errors->has('descricao'))
                            <p class="help-block">
                                {{ $errors->first('descricao') }}
                            </p>
                            @endif
                        </div>



                        <div class="row">
                            <div class="col-md-3 form-group">
                                {!! Form::label('grupo', 'Grupo') !!}
                                {!! Form::text('grupo', old('grupo'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                                <p class="help-block"></p>
                                @if($errors->has('grupo'))
                                <p class="help-block">
                                    {{ $errors->first('grupo') }}
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
