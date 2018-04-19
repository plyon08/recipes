@extends('layouts.app')

@section('content')

	@include('includes.error')

	<div class='row'>
		<div class='col'>
			<h2>Add Recipe</h2>
				{!! Form::open(['url' => '/recipes','class' => 'needs-validation','files' => true]) !!}
					{!! Form::token() !!}
					<div class="row my-5">
						<div class='col-12'>
							{!! Form::label('Recipe Name') !!}
						</div>
						<div class='col-12 col-md-6'>
							{!! Form::text('recipeName',null,['placeholder' => 'Enter the name of the recipe','class' => 'form-control']) !!}
						</div>
					</div>
					<div class='row my-5'>
						<div class="col-12 mb-3">
							{!! Form::label('Ingredients') !!}
							<small class="form-text text-muted">Ex. 1/2 cup sugar or 1 lb ham</small>
						</div>

						@for ($i = 1; $i < 16; $i++)
							<div class='col-12 col-md-6 col-lg-4 mb-3'>
								{!! Form::text('ingredient'.$i,null,['placeholder' => 'Ingredient '.$i,'class' => 'form-control']) !!}
							</div>
						@endfor

					</div>
				<div class='row my-5'>
					<div class="col-12 mb-3">
						{!! Form::label('Instructions') !!}
					</div>

					@for ($i = 1; $i < 16; $i++)
						<div class='col-12 col-md-6 col-lg-4 mb-3'>
							{!! Form::text('instruction'.$i,null,['placeholder' => 'Instruction '.$i,'class' => 'form-control']) !!}
						</div>
					@endfor

				</div>
				<div class='row my-5'>
					<div class="col-12 mb-3">
						<label for="image">Image Name</label>
					</div>
					<div class='col-12 mb-3'>
						{!! Form::file('image') !!}
					</div>
				</div>
				<div class='row my-5'>
					<div class="col-12 mb-3">
						<label for="tags">Tag</label>
					</div>
					<div class='col-12 col-md-3 mb-3'>
						{!! Form::select('tag', ['Beef' => 'Beef','Chicken' => 'Chicken','Pork' => 'Pork','Ham' => 'Ham','Fish' => 'Fish','Pasta' => 'Pasta','Dessert' => 'Dessert'],null, ['placeholder' => 'Please pick a tag...','class' => 'form-control']) !!}
					</div>
				</div>
				<div class='row justify-content-md-start my-5'>
					<div class='col col-md-2 center'>
						{!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>

@endsection
