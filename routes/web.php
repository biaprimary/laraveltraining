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

Route::resource('photo','PhotoController',['names'=>['create'=>'tampilform'],'only'=>['index','show','create']]);
Route::resource('foto','PhotoController');
Route::get('tentang','AboutController@tampil_view2');
Route::get('bebas','PhotoController@bebas');

Route::resource('registrasi','User\RegistrasiController');

Route::get('tampilsiswa','SiswaController@tampil_siswa')->name('tampil-siswa');
Route::post('insertsiswa','SiswaController@insert_siswa')->name('insert-siswa');
Route::get('formsiswa','SiswaController@form_siswa')->name('form-siswa');
Route::get('editsiswa/{id}','SiswaController@edit_siswa')->name('edit-siswa');
Route::put('updatesiswa/{id}','SiswaController@update_siswa')->name('update-siswa');
Route::delete('hapussiswa/{id}','SiswaController@hapus_siswa')->name('hapus-siswa');


Route::get('tampilsiswaqbuilder','Siswa1Controller@tampil_siswa')->name('tampilsiswaqbuilder');
Route::post('insertsiswaqbuilder','Siswa1Controller@insert_siswa')->name('insertsiswaqbuilder');
Route::put('updatesiswaqbuilder/{id}','Siswa1Controller@update_siswa')->name('updatesiswaqbuilder');
Route::delete('hapussiswaqbuilder/{id}','Siswa1Controller@hapus_siswa')->name('hapussiswaqbuilder');

Route::resource('siswa2','Siswa2Controller');
