@extends('layouts.app')

@section('content')

  <h1>Show a recipe</h1>
  <p>{{ $recipe->recipeName }}</p>
  <p>{{ $recipe->image }}</p>
  <h3>Ingredients</h3>
  <ul>
    @if (!empty($recipe->ingredient1))
      <li>{{ $recipe->ingredient1 }}</li>
    @endif

    @if (!empty($recipe->ingredient2))
      <li>{{ $recipe->ingredient2 }}</li>
    @endif

    @if (!empty($recipe->ingredient3))
      <li>{{ $recipe->ingredient3 }}</li>
    @endif

    @if (!empty($recipe->ingredient4))
      <li>{{ $recipe->ingredient4 }}</li>
    @endif

    @if (!empty($recipe->ingredient5))
      <li>{{ $recipe->ingredient5 }}</li>
    @endif

    @if (!empty($recipe->ingredient6))
      <li>{{ $recipe->ingredient6 }}</li>
    @endif

    @if (!empty($recipe->ingredient7))
      <li>{{ $recipe->ingredient7 }}</li>
    @endif

    @if (!empty($recipe->ingredient8))
      <li>{{ $recipe->ingredient8 }}</li>
    @endif

    @if (!empty($recipe->ingredient9))
      <li>{{ $recipe->ingredient9 }}</li>
    @endif

    @if (!empty($recipe->ingredient10))
      <li>{{ $recipe->ingredient10 }}</li>
    @endif

    @if (!empty($recipe->ingredient11))
      <li>{{ $recipe->ingredient11 }}</li>
    @endif
    
    @if (!empty($recipe->ingredient12))
      <li>{{ $recipe->ingredient12 }}</li>
    @endif

    @if (!empty($recipe->ingredient13))
      <li>{{ $recipe->ingredient13 }}</li>
    @endif

    @if (!empty($recipe->ingredient14))
      <li>{{ $recipe->ingredient14 }}</li>
    @endif

    @if (!empty($recipe->ingredient15))
      <li>{{ $recipe->ingredient15 }}</li>
    @endif
  </ul>
  <h3>Instructions</h3>
  <ol>
    @if (!empty($recipe->instruction1))
      <li>{{ $recipe->instruction1 }}</li>
    @endif

    @if (!empty($recipe->instruction2))
      <li>{{ $recipe->instruction2 }}</li>
    @endif

    @if (!empty($recipe->instruction3))
      <li>{{ $recipe->instruction3 }}</li>
    @endif

    @if (!empty($recipe->instruction4))
      <li>{{ $recipe->instruction4 }}</li>
    @endif

    @if (!empty($recipe->instruction5))
      <li>{{ $recipe->instruction5 }}</li>
    @endif

    @if (!empty($recipe->instruction6))
      <li>{{ $recipe->instruction6 }}</li>
    @endif

    @if (!empty($recipe->instruction7))
      <li>{{ $recipe->instruction7 }}</li>
    @endif

    @if (!empty($recipe->instruction8))
      <li>{{ $recipe->instruction8 }}</li>
    @endif

    @if (!empty($recipe->instruction9))
      <li>{{ $recipe->instruction9 }}</li>
    @endif

    @if (!empty($recipe->instruction10))
      <li>{{ $recipe->instruction10 }}</li>
    @endif

    @if (!empty($recipe->instruction11))
      <li>{{ $recipe->instruction11 }}</li>
    @endif
    
    @if (!empty($recipe->instruction12))
      <li>{{ $recipe->instruction12 }}</li>
    @endif

    @if (!empty($recipe->instruction13))
      <li>{{ $recipe->instruction13 }}</li>
    @endif

    @if (!empty($recipe->instruction14))
      <li>{{ $recipe->instruction14 }}</li>
    @endif

    @if (!empty($recipe->instruction15))
      <li>{{ $recipe->instruction15 }}</li>
    @endif
  </ol>
  <p>{{ $recipe->tags }}</p>

  <p><a class='btn btn-primary' href="/recipes/{{ $recipe->id }}/edit">Edit Recipe</a></p>
  <form method='POST' action='/recipes/{{ $recipe->id }}'>
    {{ method_field('DELETE') }}
		{{ csrf_field() }}
    <button type='submit' class='btn btn-primary'>Delete Recipe</button>
  </form>

@endsection