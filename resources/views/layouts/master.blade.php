<!DOCTYPE html>
<html>
	<head>
		<title>Llibres</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">

				<a class="navbar-brand" href="{{ url('/') }}">Home</a>
				<a class="navbar-brand" href="{{ url('llibres/') }}">Llibres</a>
				<a class="navbar-brand" href="{{ url('llibres/temas') }}">Temes</a>
				<a class="navbar-brand" href="{{ url('llibres/crea') }}">Crea Llibre</a>
				<a class="navbar-brand" href="{{ url('llibres/temas/crea') }}">Crea Tema</a>
		</nav>
		<div class="container" style="margin-top: 30px; ">
			<div class="page-header">
				@yield('header')
			</div>

			@yield('content')

			<footer class="footer">
				@yield('footer')
			</footer>
		</div>
	</body>
</html>