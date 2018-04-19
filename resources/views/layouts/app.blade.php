<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Recipes</title>

	<link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
	<script src="{{ mix('/js/app.js') }} "></script>

</head>
<body class='container-fluid mb-4'>
	@include('includes.success')

	@include('includes.nav')

	<main class='row justify-content-center mt-5'>
		<section class='col'>
			@yield('content')
		</section>
	</main>

	@include('includes.scripts')
</body>
</html>
