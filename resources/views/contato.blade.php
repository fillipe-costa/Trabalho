@extends('layouts.navfooter')

@section('content')
@endsection


<div class="valign-wrapper row login-box white-text">

  <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4 color">
    <div class="card-content">
      <form class = "col s12 m12 l12">
        <h4 class = "center-align"> Formulário para contato </h4>
          <div class="input-field col s12 m12 l12">
            Nome:
            <input id = "nome" type = "text" class = "validate">
          </div>
          <div class="input-field col s12 m12 l12">
            E-mail:
            <input id = "email" type = "email" class = "validate">
          </div>
          <div class="input-field col s12 m12 l12">
            Comentários:
            <textarea id="textarea1" class="materialize-textarea"></textarea>
          <div class="card-action center-align">
            <input type="submit" class="btn red waves-effect waves-light" value="Enviar" href="#">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
