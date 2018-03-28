@extends('layouts.app')

@section('content')
	<h1>Auth0 <span class="a0-u--red">❤</span> Laravel</h1>

@endsection

@section('menu')
	@auth
		<a href="{{ route('add-recipe') }}" class="btn btn-primary">Add Recipe</a>
		<a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
	@else
		<a href="{{ route('login') }}" class="btn btn-primary">Login</a>
	@endauth
@endsection
