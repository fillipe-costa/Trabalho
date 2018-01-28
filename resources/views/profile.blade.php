@extends('layouts.navfooter')

@section('content', 'navfooter')

<div class="valign-wrapper row login-box white-text">
  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4 color">
      <div class="card-content">
        <h4 class="center-align"> Dados do usuário </h4>
        <div class="row">
          <div>
            Nome: {{ Auth::user()->name }} <br>
            Email: {{ Auth::user()->email }} <br>
            País: {{ Auth::user()->pais }} <br>
            Cidade: {{ Auth::user()->cidade }} <br>
            CEP: {{ Auth::user()->cep }} <br>
          </div>
        </div>
      </div>
      <!-- <div class="card-action center-align">
        <input type="submit" class="btn green waves-effect" value="Cadastrar-se" href="route('register')">
        <input type="submit" class="btn green waves-effect waves-light" value="Login" href="route('login')">
      </div> -->
  </div>
</div>
