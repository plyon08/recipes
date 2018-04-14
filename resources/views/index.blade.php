@extends('layouts.app')

@section('content')
	<h1>Recipes</h1>
	<ul>
		@foreach ($recipes as $r)
			<li><a href="/recipes/{{ $r->id }}">{{ $r->recipeName }}</a></li>
		@endforeach
	</ul>
@endsection
