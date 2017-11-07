<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Esp Banjarbaru</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- style tambahan -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato|Lobster+Two|Roboto" rel="stylesheet">
    </head>
    <body>
        <div id="navigasi" class="container-fluid">
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <div class="navbar-header">
                  <a id="webname" class="navbar-brand" href="{{ url('/') }}">ESP Banjarbaru</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                         <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                         <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sing Up</a></li>
                 
                </ul>
                
              </div>
            </nav>
        </div>

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
