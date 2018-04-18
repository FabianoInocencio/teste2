@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                
 <div class="panel-heading">
                	informe os dados da Conta
                	<a class="pull-right" href="{{url('receber')}}">Listagem Contas</a>
                </div>

    

    <h3 class="page-title">@lang('Contas a receber')</h3>

    @if(Request::is('*/editar'))
                        {!! Form::model($Conta_receber, ['method' => 'PATCH', 'url'=> 'receber/'.$Conta_receber->id]) !!}
                    @else
    
    {!! Form::open(['url'=>'receber/salvar']) !!}
	@endif
      
        
        <div class="panel-body">


        	 <div class="row">
                <div class="col-md-6 form-group">
                    {!! Form::label('descricao', 'Descrição') !!}
                    {!! Form::text('descricao', old('descricao'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('descricao'))
                        <p class="help-block">
                            {{ $errors->first('descricao') }}
                        </p>
                    @endif
                </div>

                
           </div>
            
             <div class="row">
                <div class="col-md-3 form-group">
                	{!! Form::label('forma_recebimento', 'Forma de Recebimento') !!}
                    {!! Form::select('forma_recebimento', [ 'Dinheiro' => 'Dinheiro',  'Cheque' => 'Cheque', 'Boleto' => 'Boleto', 'Cartão' => 'Cartão'], null, ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('forma_recebimento'))
                        <p class="help-block">
                            {{ $errors->first('forma_recebimento') }}
                        </p>
                    @endif
                </div>
            

                
          
                <div class="col-md-3 form-group">
                    {!! Form::label('data_vencimento', 'Data Vencimento') !!}
                    {!! Form::date('data_vencimento', old('data_vencimento'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('data_vencimento'))
                        <p class="help-block">
                            {{ $errors->first('data_vencimento') }}
                        </p>
                    @endif
                </div>
            
           
                <div class="col-md-3 form-group">
                    {!! Form::label('data_recebimento', 'Data Recebimento') !!}
                    {!! Form::date('data_recebimento', old('data_recebimento'), ['class' => 'form-control date', 'placeholder' => '', ]) !!}
                    <p class="help-block"></p>
                    @if($errors->has('data_recebimento'))
                        <p class="help-block">
                            {{ $errors->first('data_recebimento') }}
                        </p>
                    @endif
                </div>

                 <div class="col-md-3 form-group">
                    {!! Form::label('valor','Valor') !!}
                    {!! Form::text('valor', old('valor'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('valor'))
                        <p class="help-block">
                            {{ $errors->first('valor') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">

             <div class="col-md-3 form-group">
                    {!! Form::label('situacao','Situação') !!}
                     {!! Form::select('situacao', ['Pago' => 'Pago', 'A Debitar' => 'A Debitar'], null, ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    
                    <p class="help-block"></p>
                    @if($errors->has('situacao'))
                        <p class="help-block">
                            {{ $errors->first('situacao') }}
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
@stop

@section('javascript')
    @parent
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}"
        });
    </script>

@stop