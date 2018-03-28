<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Recipes</title>

	<!-- See: http://styleguide.auth0.com/ -->
	<link rel="stylesheet" href="https://cdn.auth0.com/styleguide/core/2.0.5/core.min.css" />
	<link rel="stylesheet" href="https://cdn.auth0.com/styleguide/components/2.0.0/components.min.css" />
	<link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
	<script src="{{ mix('/js/app.js') }} "></script>

</head>
<body class='container-fluid'>
	<div class='row justify-content-end'>
		<div class='col-xs'>
			@yield('menu')
		</div>
	</div>
	<div class='row justify-content-center'>
		<div class='col-xs'>
			@yield('content')
		</div>
	</div>
</body>
</html>
