@extends('layouts.navfooter')

@section('conteudo')
@endsection

<!-- <html>
<head>
<title>Laravel 5.4 Cloudways Contact US Form Example</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h3>Formulário de Contato</h3>

@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif


{!! Form::open(['route'=>'contact_us.store']) !!}

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
{!! Form::label('Name:') !!}
{!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
<span class="text-danger">{{ $errors->first('name') }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
{!! Form::label('Email:') !!}
{!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
<span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
{!! Form::label('Message:') !!}
{!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
<span class="text-danger">{{ $errors->first('message') }}</span>
</div>

<div class="form-group">
<button class="btn btn-success">Contact US!</button>
</div>

{!! Form::close() !!} -->

@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

<div class="valign-wrapper row login-box white-text">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4 color">
    <form method="POST" action="{{ route('contact_us.store') }}"> {{ csrf_field() }}
      <div class="card-content">
        <h4 class = "center-align"> Formulário de contato </h4>
        <div class="row">
          <div class="input-field col s12">
            Nome:
            <input type="text" class="validate" name="name" id="name" />
          </div>
          <div class="input-field col s12">
            Email:
            <input type="email" class="validate" name="email" id="email" />
          </div>
          <div class="input-field col s12">
            Comentários:
            <textarea id="textarea1" class="materialize-textarea"></textarea>
          </div>
        </div>
      </div>
      <div class="card-action center-align">
        <input type="submit" class="btn red waves-effect waves-light" value="Enviar" href="route('contact_us.store')">
      </div>
    </form>
  </div>
</div>
