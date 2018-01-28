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
            <a href="#" class = "brand-logo center"> <strong> PIZZARIA </strong> </a>
            <ul id = "nav-mobile" class = "left hide-on-med-and-down">
              <li> <a href = "{{ route('home')}}"> Home </a> </li>
            </ul>
            <ul id = "nav-mobile" class = "right hide-on-med-and-down">
            @guest
              <li> <a href = "{{ route('register')}}"> Olá visitante(cadastrar-se) </a> </li>
            </ul>
            @else
              <li>   <a href="{{ route('profile')}}"> Olá {{ Auth::user()->name }}(ver perfil) </a> </li>
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
        @yield('conteudo')
    </footer>

    <script type = "text/javascript" src = "https://code.jquery.com/jquery-3.2.1.min.js"> </script>
    <script rel = "stylesheet" src = "{!! asset('js/materialize.min.js')!!}"> </script>

  </body>

</html>
