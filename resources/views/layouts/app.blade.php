<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pizza</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
              <li><a href="{{ route('home') }}">Home</a></li>
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

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script rel = "stylesheet" src = "{!! asset('js/materialize.min.js')!!}"> </script>

</body>
</html>
