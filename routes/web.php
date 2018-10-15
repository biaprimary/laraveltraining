<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function (){
  echo "Hello World";
});

Route::get('/halojuga', function (){
  return view('hallo');
});

Route::get('/haloreturn', function (){
  return "Hello World Return";
});
