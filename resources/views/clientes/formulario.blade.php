@extends('layouts.app')

@section('content')



<style type="text/css">
      .imgpreview{
          margin: 1px;
    width: 166px;
  height: 30%;
  border-radius: 5%;
  
 background: rgba(0,0,0,0.5);
  color: #fff;
  top: 25%;
  left: 88%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
      }
      .col-md-8{
     border-radius: 5%;
  
  
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
      }
      .container input[type="file"]{
       
  top: 41%;
  left: 80%;
  position: absolute;

      }
    </style>



<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                


       
                <div class="panel-heading">
                	informe os dados do Cliente
                	<a class="pull-right" href="{{url('clientes')}}">Listagem cliente</a>
                </div>

                <div class="panel-body">
                @if(Session::has('mensagem_sucesso'))
                    <div class="alert alert-success">{{ Session::get('mensagem_sucesso')}}</div>
                    @endif

                   Formulário

                    @if(Request::is('*/editar'))
                        {!! Form::model($cliente, ['method' => 'PATCH', 'url'=> 'clientes/'.$cliente->id]) !!}
                    @else

                   {!! Form::open(['url'=>'clientes/salvar']) !!}

                   @endif




                    <div class="container">
            @yield('content')
        </div>

       
             

        

                   <div class="row">
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
                
                <div class="col-md-2 form-group">
                    {!! Form::label('sexo', 'Sexo') !!}
                    <!--{!! Form::text('sexo', old('sexo'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!} -->
                    {!! Form::select('sexo', ['Masculino' => 'Masculino', 'Feminino' => 'Feminino'], null, ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                   
                    <p class="help-block"></p>
                    @if($errors->has('sexo'))
                        <p class="help-block">
                            {{ $errors->first('sexo') }}
                        </p>
                    @endif
                </div>
              
                <div class="col-md-3 form-group">
                    {!! Form::label('nascimento', 'Data Nascimento') !!}
                    {!!Form::date('nascimento', null , ['class' => 'form-control date', 'placeholder' => '', 'required' => '']);!!}
                    
                    <p class="help-block"></p>
                    @if($errors->has('nascimento'))
                        <p class="help-block">
                            {{ $errors->first('nascimento') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 form-group">
                    {!! Form::label('cpf', 'CPF') !!}
                    {!! Form::text('cpf', old('cpf'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cpf'))
                        <p class="help-block">
                            {{ $errors->first('cpf') }}
                        </p>
                    @endif
                </div>
            
                <div class="col-md-3 form-group">
                    {!! Form::label('rg', 'RG') !!}
                    {!! Form::text('rg', old('rg'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rg'))
                        <p class="help-block">
                            {{ $errors->first('rg') }}
                        </p>
                    @endif
                </div>
           
           
                <div class="col-md-2 form-group">
                    {!! Form::label('orgao_espedidor', 'Orgão Espedidor') !!}
                    {!! Form::text('orgao_espedidor', old('orgao_espedidor'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('orgao_espedidor'))
                        <p class="help-block">
                            {{ $errors->first('orgao_espedidor') }}
                        </p>
                    @endif
                </div>
           
                <div class="col-md-1 form-group">
                    {!! Form::label('uf','UF') !!}
                    {!! Form::text('uf', old('uf'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('uf'))
                        <p class="help-block">
                            {{ $errors->first('uf') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                
            
                <div class="col-md-5 form-group">
                    {!! Form::label('endereco', 'Endereço') !!}
                    {!! Form::text('endereco', old('endereco'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('endereco'))
                        <p class="help-block">
                            {{ $errors->first('endereco') }}
                        </p>
                    @endif
                </div>
                
            
                <div class="col-md-4 form-group">
                    {!! Form::label('complemento', 'Complemento') !!}
                    {!! Form::text('complemento', old('complemento'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('complemento'))
                        <p class="help-block">
                            {{ $errors->first('complemento') }}
                        </p>
                    @endif
                </div>
            </div>
            

                <div class="row">

                  <div class="col-md-1 form-group">
                    {!! Form::label('numero','Número') !!}
                    {!! Form::text('numero', old('numero'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cidade'))
                        <p class="help-block">
                            {{ $errors->first('cidade') }}
                        </p>
                    @endif
                </div>
            
                <div class="col-md-4 form-group">
                    {!! Form::label('cidade','Cidade') !!}
                    {!! Form::text('cidade', old('cidade'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cidade'))
                        <p class="help-block">
                            {{ $errors->first('cidade') }}
                        </p>
                    @endif
                </div>
            
            
                <div class="col-md-2 form-group">
                    {!! Form::label('cep', 'Cep') !!}
                    {!! Form::text('cep', old('cep'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('cep'))
                        <p class="help-block">
                            {{ $errors->first('cep') }}
                        </p>
                    @endif
                </div>
            
            
                <div class="col-md-3 form-group">
                    {!! Form::label('estado','Estado') !!}
                    <!--{!! Form::text('estado', old('estado'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}-->
                   {!! Form::select('estado', 
     ['Acre' => 'Acre',
     'Amapá' => 'Amapá',
     'Amazonas' => 'Amazonas',
     'Bahia' => 'Bahia',
     'Ceará' => 'Ceará',
     'Distrito Federal' => 'Distrito Federal',
     'Espírito Santo' => 'Espírito Santo',
     'Goiás' => 'Goiás',
     'Maranhão' => 'Maranhão',
     'Mato Grosso' => 'Mato Grosso',
     'Mato Grosso do Sul' => 'Mato Grosso do Sul',
     'Minas Gerais' => 'Minas Gerais',
     'Pará' => 'Pará',
     'Paraíba' => 'Paraíba',
     'Paraná' => 'Paraná',
     'Pernambuco' => 'Pernambuco',
     'Piauí' => 'Piauí',
     'Rio de Janeiro' => 'Rio de Janeiro',
     'Rio Grande do Norte' => 'Rio Grande do Norte',
     'Rio Grande do Sul' => 'Rio Grande do Sul',
     'Rondônia' => 'Rondônia',
     'Roraima' => 'Roraima',
     'Santa Catarina' => 'Santa Catarina',
        'São Paulo' => 'São Paulo',
     'Sergipe' => 'Sergipe',
     'Tocantins' => 'Tocantins',
     

], null, ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('estado'))
                        <p class="help-block">
                            {{ $errors->first('estado') }}
                        </p>
                    @endif
                </div>
            

           

            <div class="row">
                <div class="col-md-6 form-group">
                    {!! Form::label('email','E-mail') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            
                <div class="col-md-3 form-group">
                    {!! Form::label('telefone', 'Telefone') !!}
                    {!! Form::text('telefone', old('telefone'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('telefone'))
                        <p class="help-block">
                            {{ $errors->first('telefone') }}
                        </p>
                    @endif
                </div>

                <div class="col-md-3 form-group">
                    {!! Form::label('situacao','Situação') !!}
                     {!! Form::select('situacao', ['Ativo' => 'Ativo', 'Inativo' => 'Inativo'], null, ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    
                    <p class="help-block"></p>
                    @if($errors->has('situacao'))
                        <p class="help-block">
                            {{ $errors->first('situacao') }}
                        </p>
                    @endif
                </div>

            </div>

            

                  
                   {!! Form::label('motivo', 'Qual o Motivo de começar a treinar?') !!}<br />
                   {!! Form::checkbox('motivo[]', 'Emagrecer',false);!!} Emagrecer<br />
                   {!! Form::checkbox('motivo[]', 'Ganho de Peso',false);!!} Ganho de Peso<br />
                   {!! Form::checkbox('motivo[]', 'Ganho de Massa Magra', false);!!} Ganho de Massa Magra<br />


                   {!! Form::label('treino', 'Já treinou Antes?') !!}<br />
                   {!! Form::checkbox('treino[]', 'S',false);!!} Sim<br />
                   {!! Form::checkbox('treino[]', 'N',false);!!} Não<br />
                   


                    <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('doenca', 'Tem alguma doença?') !!}
                   
                    {!! Form::checkbox('doenca[]', 'Hipertensão',false);!!} Hipertensão<br />
                   {!! Form::checkbox('doenca[]', 'Diabetes',false);!!} Diabetes<br />
                   {!! Form::checkbox('doenca[]', 'Dor no Corpo', false);!!} Dor no Corpo<br />
                   {!! Form::checkbox('doenca[]', 'Lesão',false);!!} Lesão<br />
                   {!! Form::checkbox('doenca[]', 'Doença Cardiovascular', false);!!} Doença Cardiovascular<br />
                   {!! Form::checkbox('doenca[]', 'Hérnia de Disco',false);!!} Hérnia de Disco<br />
                   {!! Form::checkbox('doenca[]', 'Não',false);!!} Não<br />
                    


                    
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
