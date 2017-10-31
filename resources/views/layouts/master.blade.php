<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">ESP Banjarbaru</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		      <li><a href="#">GDM</a></li>
		      <li><a href="#">Spare Parts</a></li>
		      <li><a href="#">Employers</a></li>
			  <li class="dropdown">
		        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Files
		        <span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Work Instruction</a></li>
		          <li><a href="#">Job Safety Analize</a></li>
		          <li><a href="#">One Point Lesson</a></li>
		          <li><a href="#">Safety Talk</a></li>
		          <li><a href="#">Others</a></li>
		        </ul>
		      </li>
		      <li><a href="#">About Us</a></li>

		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		    </ul>
		  </div>
		</nav>
	</div>

	@yield('content')
		

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
	}
</body>
</html>
