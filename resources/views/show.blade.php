@extends('layouts.app')

@section('content')

  <div class='row justify-content-center'>
    <div class='col-md-10'>
      <h2>{{ $recipe->recipeName }}</h2>

      <p class='my-4'><img class='recipe-img-show' src="{{ asset('storage/'. $recipe->image) }}" alt='No Image is Available' width='100%' height='auto' /></p>

      <div class='my-4'>
        <h4 class='mt-4'>Ingredients</h4>
        <ul>

          @php
            $ingredients = [];
            array_push($ingredients,$recipe->ingredient1,$recipe->ingredient2,$recipe->ingredient3,$recipe->ingredient4,$recipe->ingredient5,$recipe->ingredient6,$recipe->ingredient7,$recipe->ingredient8,$recipe->ingredient9,$recipe->ingredient10,$recipe->ingredient11,$recipe->ingredient12,$recipe->ingredient13,$recipe->ingredient14,$recipe->ingredient15);

            foreach ($ingredients as $i) {
              if(!empty($i)) {
                $ingredient = htmlspecialchars($i);
                echo "<li>
                  $ingredient
                </li>";
              }
            }
          @endphp

        </ul>
      </div>

      <div class='my-4'>
        <h4 class='mt-4'>Instructions</h4>
        <ol>

          @php
            $instructions = [];
            array_push($instructions,$recipe->instruction1,$recipe->instruction2,$recipe->instruction3,$recipe->instruction4,$recipe->instruction5,$recipe->instruction6,$recipe->instruction7,$recipe->instruction8,$recipe->instruction9,$recipe->instruction10,$recipe->instruction11,$recipe->instruction12,$recipe->instruction13,$recipe->instruction14,$recipe->instruction15);

            foreach ($instructions as $i) {
              if(!empty($i)) {
                $instruction = htmlspecialchars($i);
                echo "<li>
                  $instruction
                </li>";
              }
            }
          @endphp

        </ol>
      </div>

      <p class='my-4'>Tag: {{ $recipe->tag }}</p>

      <div class='row justify-content-md-start'>
        <div class='col col-md-2 col-lg-1'>
          <div class='center'><a class='btn btn-primary' href="/recipes/{{ $recipe->id }}/edit">Update</a></div>
        </div>
        <div class='col col-md-2 col-lg-1'>
          <div class='center'>
            <form method='POST' action='/recipes/{{ $recipe->id }}'>
              {{ method_field('DELETE') }}
          		{{ csrf_field() }}
              <button type='submit' class='btn btn-danger'>Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
