@extends('layouts.app')

@section('content')

	@include('includes.error')

	<h1>Add Recipe</h1>
		{!! Form::open(['url' => '/recipes','class' => 'needs-validation','files' => true]) !!}
			<div class="row">
				<div class='col-xs-12'>
					{!! Form::label('Recipe Name') !!}
				</div>
				<div class='col-xs-12 col-md-4 mb-3'>
					{!! Form::text('recipeName',null,['placeholder' => 'Enter the name of the recipe','class' => 'form-control']) !!}
				</div>
			</div>
		<hr>
		<div class='row'>
			<div class="col-xs-12 mb-3">
				{!! Form::label('Ingredients') !!}
				<small class="form-text text-muted">Ex. 1/2 cup sugar or 1 lb ham</small>
			</div>
			@for ($i = 1; $i < 16; $i++)
				<div class='col-xs-12 col-md-4 mb-3'>
					{!! Form::text('ingredient'.$i,null,['placeholder' => 'Ingredient '.$i,'class' => 'form-control']) !!}
				</div>
			@endfor

		</div>
		<hr>
		<div class='row'>
			<div class="col-xs-12 mb-3">
				{!! Form::label('Instructions') !!}
			</div>
			@for ($i = 1; $i < 16; $i++)
				<div class='col-xs-12 col-md-4 mb-3'>
					{!! Form::text('instruction'.$i,null,['placeholder' => 'Instruction '.$i,'class' => 'form-control']) !!}
				</div>
			@endfor
		</div>
		<hr>
		<div class='row'>
			<div class="col-xs-12 mb-3">
				<label for="image">Image Name</label>
			</div>
			<div class='col-xs-12 col-md-4 mb-3'>
				{!! Form::file('image') !!}
			</div>
		</div>
		<hr>
		<div class='row'>
			<div class="col-xs-12 mb-3">
				<label for="tags">Tag</label>
			</div>
			<div class='col-xs-12 col-md-4 mb-3'>
				{!! Form::select('tag', ['Beef' => 'Beef','Chicken' => 'Chicken','Pork' => 'Pork','Ham' => 'Ham','Fish' => 'Fish','Pasta' => 'Pasta','Dessert' => 'Dessert'],null, ['placeholder' => 'Please pick a tag...']) !!}
			</div>
		</div>
		<hr>
		<div class='row mb-5'>
			<div class='col-xs-12 col-md-4'>
				{!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
			</div>
		</div>
	{!! Form::close() !!}

@endsection
