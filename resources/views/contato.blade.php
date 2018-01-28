<!doctype html>

<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Pizza </title>

    <link rel = "stylesheet" type = "text/css" href = "{!! asset('css/home.css') !!}">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel = "stylesheet" type = "text/css" href = "{!! asset('css/materialize.min.css') !!}">

  </head>

  <body>

    <div>
        <nav class = "color">

          <div class = "nav-wrapper z-depth-1">
            <ul id = "nav-mobile" class = "left hide-on-med-and-down">
              <li> <strong> PIZZA HOUSE </strong> </li>
            </ul>
            @guest
              <ul id = "nav-mobile" class = "right hide-on-med-and-down">
                <li> <a> Olá visitante </a> </li>
              </ul>
              @else
              <ul id = "nav-mobile" class = "right hide-on-med-and-down">
                <li> <a href="{{ route('profile')}}"> Olá {{ Auth::user()->name }} </a> </li>
                <li>
                  <a href="{{ route('logout') }}"
                    onclick = "event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sair
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                      {{ csrf_field() }}
                  </form>
                </li>
            </ul>
          @endguest
        </div>
      </nav>
    </div>

    <div class="valign-wrapper row login-box white-text">
      <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4 color">
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
          <div class="card-content">
            <h4 class = "center-align"> Formulário para contato </h4>
            <div class="row">
              <div class="input-field col s12">
                Seu nome
                <input type="email" class="validate" name="email" id="email" />
              </div>
              <div class="input-field col s12">
                E-mail
                <input type="password" class="validate" name="password" id="password" />
              </div>
            </div>
          </div>
          <div class="card-action center-align">
            <input type="submit" class="btn green waves-effect waves-light" value="Enviar" href="route('login')">
          </div>
        </form>
      </div>
    </div>

    <footer class = "page-footer color">
      <div class = "container">
        <div class = "row">
          <div class = "col s4 m4 l4">
            <ul>
              <li class = "white-text"> Empresa </li>
              <li> <a href = "#"> Restaurantes </a> </li>
              <li> <a href = "{{ route('contato')}}"> Contato </a> </li>
            </ul>
          </div>
          <div class = "col s4 m4 l4">
            <ul>
              <li class = "white-text"> Links úteis </li>
              <li> <a href="#"> Cardápio </a> </li>
              <li> <a href="#"> Fazer pedido </a> </li>
              @guest
              <li> <a href="{{ route('register') }}">  Cadastrar-se </a> </li>
              @endguest
          </div>
          <div class = "col s4 m4 l4">
            <ul>
              <li class = white-text> Siga-nos </li>
            </ul>
            <img src = "img/instagram.png" height = 40 width = 40>
            <img src = "img/twitter.png" height = 40 width = 40>
            <img src = "img/facebook.png" height = 40 width = 40>
          </div>
        </div>
      </div>

        <div class = "footer-copyright color">
          <div class = "container">
            © 2018
          </div>
        </div>
    </footer>

    <script type = "text/javascript" src = "https://code.jquery.com/jquery-3.2.1.min.js"> </script>
    <script rel = "stylesheet" src = "{!! asset('js/materialize.min.js')!!}"> </script>
  </body>

</html>
