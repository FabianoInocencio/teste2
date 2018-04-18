@extends('layouts.app')



@section('content')

<style type="text/css">
    .logo{
        width: 100%;
    height: 100%;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Logado com Sucesso!!</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <img src="{{url('logo.png')}}" class=" logo"></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
