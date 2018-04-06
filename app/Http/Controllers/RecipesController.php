<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{

	public function __construct()
	{
    $this->middleware('auth');
	}
	
	public function index()
	{
		if(!empty(request(['tag']))) {
			$tag = request(['tag']);
			$recipes = Recipe::tags($tag)->orderBy('recipeName')->get();
		} else {
			$recipes = Recipe::latest()->get();
		}

		return view('index',compact('recipes'));
	}

	public function create()
	{
		return view('create');
	}

	public function store(Request $request)
	{
		$this->validate(request(),[
			'recipeName'=>'required',
			'image'=>'required',
			'tags'=>'required'
		]);

		$recipe = new Recipe;

		$recipe->recipeName = $request->recipeName;
		$recipe->ingredient1 = $request->ingredient1;
		$recipe->ingredient2 = $request->ingredient2;
		$recipe->ingredient3 = $request->ingredient3;
		$recipe->ingredient4 = $request->ingredient4;
		$recipe->ingredient5 = $request->ingredient5;
		$recipe->ingredient6 = $request->ingredient6;
		$recipe->ingredient7 = $request->ingredient7;
		$recipe->ingredient8 = $request->ingredient8;
		$recipe->ingredient9 = $request->ingredient9;
		$recipe->ingredient10 = $request->ingredient10;
		$recipe->ingredient11 = $request->ingredient11;
		$recipe->ingredient12 = $request->ingredient12;
		$recipe->ingredient13 = $request->ingredient13;
		$recipe->ingredient14 = $request->ingredient14;
		$recipe->ingredient15 = $request->ingredient15;
		$recipe->instruction1 = $request->instruction1;
		$recipe->instruction2 = $request->instruction2;
		$recipe->instruction3 = $request->instruction3;
		$recipe->instruction4 = $request->instruction4;
		$recipe->instruction5 = $request->instruction5;
		$recipe->instruction6 = $request->instruction6;
		$recipe->instruction7 = $request->instruction7;
		$recipe->instruction8 = $request->instruction8;
		$recipe->instruction9 = $request->instruction9;
		$recipe->instruction10 = $request->instruction10;
		$recipe->instruction11 = $request->instruction11;
		$recipe->instruction12 = $request->instruction12;
		$recipe->instruction13 = $request->instruction13;
		$recipe->instruction14 = $request->instruction14;
		$recipe->instruction15 = $request->instruction15;
		$recipe->image = $request->image;
		$recipe->tags = $request->tags;

		$recipe->save();

		return redirect('/recipes');
	}

	public function show(Recipe $recipe)
	{
		return view('show',compact('recipe'));
	}

	public function edit(Recipe $recipe)
	{
		return view('edit',compact('recipe'));
	}

	public function update(Request $request, Recipe $recipe)
	{
		$this->validate(request(),[
			'recipeName'=>'required',
			'image'=>'required',
			'tags'=>'required'
		]);

		$recipe = Recipe::find($recipe->id);

		$recipe->recipeName = $request->recipeName;
		$recipe->ingredient1 = $request->ingredient1;
		$recipe->ingredient2 = $request->ingredient2;
		$recipe->ingredient3 = $request->ingredient3;
		$recipe->ingredient4 = $request->ingredient4;
		$recipe->ingredient5 = $request->ingredient5;
		$recipe->ingredient6 = $request->ingredient6;
		$recipe->ingredient7 = $request->ingredient7;
		$recipe->ingredient8 = $request->ingredient8;
		$recipe->ingredient9 = $request->ingredient9;
		$recipe->ingredient10 = $request->ingredient10;
		$recipe->ingredient11 = $request->ingredient11;
		$recipe->ingredient12 = $request->ingredient12;
		$recipe->ingredient13 = $request->ingredient13;
		$recipe->ingredient14 = $request->ingredient14;
		$recipe->ingredient15 = $request->ingredient15;
		$recipe->instruction1 = $request->instruction1;
		$recipe->instruction2 = $request->instruction2;
		$recipe->instruction3 = $request->instruction3;
		$recipe->instruction4 = $request->instruction4;
		$recipe->instruction5 = $request->instruction5;
		$recipe->instruction6 = $request->instruction6;
		$recipe->instruction7 = $request->instruction7;
		$recipe->instruction8 = $request->instruction8;
		$recipe->instruction9 = $request->instruction9;
		$recipe->instruction10 = $request->instruction10;
		$recipe->instruction11 = $request->instruction11;
		$recipe->instruction12 = $request->instruction12;
		$recipe->instruction13 = $request->instruction13;
		$recipe->instruction14 = $request->instruction14;
		$recipe->instruction15 = $request->instruction15;
		$recipe->image = $request->image;
		$recipe->tags = $request->tags;

		$recipe->save();

		return redirect('/recipes/{{ $recipe->id }}');
	}

	public function destroy(Recipe $recipe)
	{
		$recipe = Recipe::find($recipe->id);

		$recipe->delete();

		return redirect('/recipes');
	}
}
