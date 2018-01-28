@extends('layouts.navfooter')

@section('content')
@endsection

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
  </div>
</div>
