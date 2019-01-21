<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class RecipesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $userID = \Auth::user()->sub;

        if (!empty(request(['tag']))) {
            $tag = request(['tag']);
            $recipes = Recipe::tag($tag, $userID)->orderBy('recipeName')->get();
        } else {
            $recipes = Recipe::latest()->where('userID', $userID)->get();
        }

        return view('index', compact('recipes'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'recipeName' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
            'tag' => 'required'
        ]);

        $recipe = new Recipe;
        $data = $request->only($recipe->getFillable());
        $data['userID'] = \Auth::user()->sub;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public');
            $file_name = $request->file('image')->hashName();
            $data['image'] = $file_name;
        } else {
            $data['image'] = 'no-image.png';
        }

        $recipe->fill($data)->save();

        session()->flash('message', 'Recipe Saved Successfully!');

        return redirect('/recipes');
    }

    public function show(Recipe $recipe)
    {
        return view('show', compact('recipe'));
    }

    public function edit(Recipe $recipe)
    {
        return view('edit', compact('recipe'));
    }

    public function update(Request $request, Recipe $recipe)
    {
        $this->validate(request(), [
            'recipeName' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
            'tag' => 'required'
        ]);

        $recipe = Recipe::find($recipe->id);
        $data = $request->only($recipe->getFillable());
        $data['userID'] = \Auth::user()->sub;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public');
            $file_name = $request->file('image')->hashName();
            $data['image'] = $file_name;
        } else {
            $data['image'] = $recipe->image;
        }

        $recipe->fill($data)->save();

        session()->flash('message', 'Recipe Updated Successfully!');

        return redirect('/recipes/'.$recipe->id);
    }

    public function destroy(Recipe $recipe)
    {
        $recipe = Recipe::find($recipe->id);

        $recipe->delete();

        session()->flash('message', 'Recipe Deleted Successfully!');

        return redirect('/recipes');
    }
}
