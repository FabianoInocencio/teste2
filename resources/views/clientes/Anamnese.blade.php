{!! Form::open(['url'=>'clientes_Motivo/salvar']) !!}



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

        {!! Form::submit('salvar', ['class' =>'btn btn-primary']) !!}
        {!! Form::close() !!}
