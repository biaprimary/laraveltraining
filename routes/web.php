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

Route::get('tambah/{a}/{b}/{c}', function($a,$b,$c){
  return $a+$b . " Nilai : " . $c;
});

Route::get('add/{a}/{b}', function($a,$b){
  $hasil = $a + $b;
  return view('tambah')->with('hasil',$hasil);
});

Route::get('addblade/{a}/{b}', function($a,$b){
  $hasil = $a + $b;
  return view('tambahblade')->with('hasil',$hasil);
});

Route::get('addarray/{a?}/{b?}', function($a=20,$b=20){
  $hasilarray = ['nama'=>'Bia'];
  $hasil = $a + $b;
  return view('tambah', compact('hasilarray',$hasilarray))->with('hasil',$hasil);
});

Route::get('addarrayblade/{a}/{b}', function($a,$b){
  $hasilarray = ['nama'=>'Bia'];
  $hasil = $a + $b;
  return view('tambahblade', compact('hasilarray',$hasilarray))->with('hasil',$hasil);
});

Route::get('about','AboutController@tampil');
Route::get('about-view','AboutController@tampil_view');
Route::get('user/{id}','User\UsersController@show');
Route::get('usertampilnama/{nama}','User\UsersController@tampilNama');
Route::get('show-profile/{nama}','User\ShowProfile'); //contoh single action controller

Route::get('photoindex','PhotoController@index');
Route::get('photocreate','PhotoController@create');
Route::get('photostore','PhotoController@store');

Route::resource('photo','PhotoController');
