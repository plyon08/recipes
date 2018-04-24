<?php

Route::view('/','welcome');

Route::get('/recipes','RecipesController@index')->name('index');
Route::get('/recipes/create','RecipesController@create')->name('create');
Route::post('/recipes','RecipesController@store')->name('store');
Route::get('/recipes/{recipe}','RecipesController@show')->name('show');
Route::get('/recipes/{recipe}/edit','RecipesController@edit')->name('edit');
Route::patch('/recipes/{recipe}','RecipesController@update')->name('update');
Route::delete('/recipes/{recipe}','RecipesController@destroy')->name('destroy');

Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback' )->name( 'auth0-callback' );
Route::get('/login', 'Auth\Auth0IndexController@login' )->name( 'login' );
Route::get('/logout', 'Auth\Auth0IndexController@logout' )->name( 'logout' )->middleware('auth');
