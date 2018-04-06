<?php

Route::view('/','welcome');

Route::get('/recipes','RecipesController@index');
Route::get('/recipes/create','RecipesController@create');
Route::post('/recipes','RecipesController@store');
Route::get('/recipes/{recipe}','RecipesController@show');
Route::get('/recipes/{recipe}/edit','RecipesController@edit');
Route::patch('/recipes/{recipe}','RecipesController@update');
Route::delete('/recipes/{recipe}','RecipesController@destroy');

Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );
Route::get('/login', 'Auth\Auth0IndexController@login' )->name( 'login' );
Route::get('/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' )->middleware('auth');