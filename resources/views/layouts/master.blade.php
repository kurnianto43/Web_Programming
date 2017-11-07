<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>{{ config('app.name', 'Laravel') }}</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">	
	<!-- Style css/bootstrap -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- style tambahan -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- link fixed bug glypicon bootstrap -->
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
		    <ul class="nav navbar-nav">
		      	<li class="active"><a href="#">Home</a></li>
		      	<li><a href="#">GDM</a></li>
		      	<li><a href="#">Spare Parts</a></li>
		      	<li><a href="#">Employers</a></li>
			  	<li class="dropdown">
		        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Files<span class="caret"></span></a>
		        	<ul id="drop-files" class="dropdown-menu">
		          		<li><a href="#">Work Instruction</a></li>
		          		<li><a href="#">Job Safety Analize</a></li>
		          		<li><a href="#">One Point Lesson</a></li>
		          		<li><a href="#">Safety Talk</a></li>
		          		<li><a href="#">Others</a></li>
		        	</ul>
		      	</li>
		      	<li><a href="#">About Us</a></li>
		    </ul> <!-- end of navbar-nav -->

		    <ul class="nav navbar-nav navbar-right">
		    	@guest
		      		<li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		      		<li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

		      	@else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"> {{ Auth::user()->name }} <span class="caret"></span></a>

                        <ul class="logout dropdown-menu">
                        	<li><a href="#">Profil</a></li>
                            <li><a href="#">Setting</a></li>
                            <li>
                                <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        	{{ csrf_field() }}
                   						</form>
                            </li>
                        </ul>
                    </li>
                @endguest
		    </ul>
		  </div>
		</nav> <!-- end of navbar-inverse -->
	</div> <!-- end of container navigasi -->

	@yield('content')
		

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
