@extends('layouts.app')

@section('menu')
	@auth
		<a href="{{ url('/') }}" class="btn btn-primary">Home</a>
		<a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
	@endauth
@endsection

@section('content')
	<h1>Add Recipe</h1>

	
@endsection
