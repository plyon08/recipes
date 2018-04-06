@extends('layouts.app')

@section('content')

	@include('includes.error')

	<h1>Add Recipe</h1>
	<form method='POST' action='/recipes/{{ $recipe->id }}' class='needs-validation'>
    {{ method_field('PATCH') }}
		{{ csrf_field() }}
			<div class="row">
				<div class='col-xs-12'>
					<label for="recipeName">Recipe Name</label>
				</div>
				<div class='col-xs-12 col-md-4 mb-3'>
					<input type="text" class="form-control" id="recipeName" name='recipeName' value='{{ $recipe->recipeName }}' placeholder="Enter the name of the recipe">
				</div>
			</div>
		<hr>
		<div class='row'>
			<div class="col-xs-12 mb-3">
				<label>Ingredients</label>
				<small class="form-text text-muted">Ex. 1/2 cup sugar or 1 lb ham</small>
			</div>
			<div class='col-xs-12 col-md-4 mb-3'>
				<input type="text" class="form-control" id="ingredient1" name='ingredient1' value='{{ $recipe->ingredient1 }}' placeholder="1st ingredient">
			</div>
			<div class='col-xs-12 col-md-4 mb-3'>
				<input type="text" class="form-control" id="ingredient2" name='ingredient2' value='{{ $recipe->ingredient2 }}' placeholder="2nd ingredient">
			</div>
			<div class='col-xs-12 col-md-4 mb-3'>
				<input type="text" class="form-control" id="ingredient3" name='ingredient3' value='{{ $recipe->ingredient3 }}' placeholder="3rd ingredient">
			</div>
			<div class='col-xs-12 col-md-4 mb-3'>
				<input type="text" class="form-control" id="ingredient4" name='ingredient4' value='{{ $recipe->ingredient4 }}' placeholder="4th ingredient">
			</div>
			<div class='col-xs-12 col-md-4 mb-3'>
				<input type="text" class="form-control" id="ingredient5" name='ingredient5' value='{{ $recipe->ingredient5 }}' placeholder="5th ingredient">
			</div>
			<div class="col-xs-12 col-md-4 mb-3">
				<input type="text" class="form-control" id="ingredient6" name='ingredient6' value='{{ $recipe->ingredient6 }}' placeholder="6th ingredient">
			</div>
			<div class="col-xs-12 col-md-4 mb-3">
				<input type="text" class="form-control" id="ingredient7" name='ingredient7' value='{{ $recipe->ingredient7 }}' placeholder="7th ingredient">
			</div>
			<div class="col-xs-12 col-md-4 mb-3">
				<input type="text" class="form-control" id="ingredient8" name='ingredient8' value='{{ $recipe->ingredient8 }}' placeholder="8th ingredient">
			</div>
			<div class="col-xs-12 col-md-4 mb-3">
				<input type="text" class="form-control" id="ingredient9" name='ingredient9' value='{{ $recipe->ingredient9 }}' placeholder="9th ingredient">
			</div>
			<div class="col-xs-12 col-md-4 mb-3">
				<input type="text" class="form-control" id="ingredient10" name='ingredient10' value='{{ $recipe->ingredient10 }}' placeholder="10th ingredient">
			</div>
			<div class="col-xs-12 col-md-4 mb-3">
				<input type="text" class="form-control" id="ingredient11" name='ingredient11' value='{{ $recipe->ingredient11 }}' placeholder="11th ingredient">
			</div>
			<div class="col-xs-12 col-md-4 mb-3">
				<input type="text" class="form-control" id="ingredient12" name='ingredient12' value='{{ $recipe->ingredient12 }}' placeholder="12th ingredient">
			</div>
			<div class="col-xs-12 col-md-4 mb-3">
				<input type="text" class="form-control" id="ingredient13" name='ingredient13' value='{{ $recipe->ingredient13 }}' placeholder="13th ingredient">
			</div>
			<div class="col-xs-12 col-md-4 mb-3">
				<input type="text" class="form-control" id="ingredient14" name='ingredient14' value='{{ $recipe->ingredient14 }}' placeholder="14th ingredient">
			</div>
			<div class="col-xs-12 col-md-4 mb-3">
				<input type="text" class="form-control" id="ingredient15" name='ingredient15' value='{{ $recipe->ingredient15 }}' placeholder="15th ingredient">
			</div>
		</div>
		<hr>
		<div class='row'>
			<div class="col-xs-12 mb-3">
				<label>Instructions</label>
			</div>
			<div class='col-xs-12 col-md-6 mb-3'>
				<input type="text" class="form-control" id="instruction1" name='instruction1' value='{{ $recipe->instruction1 }}' placeholder="1st instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction2" name='instruction2' value='{{ $recipe->instruction2 }}' placeholder="2nd instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction3" name='instruction3' value='{{ $recipe->instruction3 }}' placeholder="3rd instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction4" name='instruction4' value='{{ $recipe->instruction4 }}' placeholder="4th instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction5" name='instruction5' value='{{ $recipe->instruction5 }}' placeholder="5th instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction6" name='instruction6' value='{{ $recipe->instruction6 }}' placeholder="6th instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction7" name='instruction7' value='{{ $recipe->instruction7 }}' placeholder="7th instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction8" name='instruction8' value='{{ $recipe->instruction8 }}' placeholder="8th instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction9" name='instruction9' value='{{ $recipe->instruction9 }}' placeholder="9th instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction10" name='instruction10' value='{{ $recipe->instruction10 }}' placeholder="10th instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction11" name='instruction11' value='{{ $recipe->instruction11 }}' placeholder="11th instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction12" name='instruction12' value='{{ $recipe->instruction12 }}' placeholder="12th instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction13" name='instruction13' value='{{ $recipe->instruction13 }}' placeholder="13th instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction14" name='instruction14' value='{{ $recipe->instruction14 }}' placeholder="14th instruction">
			</div>
			<div class="col-xs-12 col-md-6 mb-3">
				<input type="text" class="form-control" id="instruction15" name='instruction15' value='{{ $recipe->instruction15 }}' placeholder="15th instruction">
			</div>
		</div>
		<hr>
		<div class='row'>
			<div class="col-xs-12 mb-3">
				<label for="image">Image Name</label>
			</div>
			<div class='col-xs-12 col-md-4 mb-3'>
				<input type="text" class="form-control" id="image" name='image' value='{{ $recipe->image }}' placeholder="Enter file name of image">
				<small class="form-text text-muted">Ex. name-of-image.jpg</small>
			</div>
		</div>
		<hr>
		<div class='row'>
			<div class="col-xs-12 mb-3">
				<label for="tags">Tags</label>
			</div>
			<div class='col-xs-12 col-md-4 mb-3'>
				<input type="text" class="form-control" id="tags" name='tags' value='{{ $recipe->tags }}' placeholder="Enter tags to be used to identify the recipe">
				<small class="form-text text-muted">Ex. beef,chicken,pasta or just beef</small>
			</div>
		</div>
		<hr>
		<div class='row mb-5'>
			<div class='col-xs-12 col-md-4'>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
	</form>
	
@endsection
