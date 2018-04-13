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
	@include('includes.nav')
	<main class='row justify-content-center'>
		<section class='col'>
			@yield('content')
		</section>
	</main>
	@include('includes.scripts')
</body>
</html>
