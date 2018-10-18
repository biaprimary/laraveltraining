<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Siswa1Controller extends Controller
{
  function tampil_siswa(){
    //QUERY BUILDER
    $siswa = DB::table('siswa')->select('id_siswa','nama_siswa','jk_siswa','tgl_lahir_siswa')->where('id_siswa','S001')->orwhere('id_siswa','S002')->orderBy('id_siswa','desc')->get();
    //$siswa = DB::table('siswa')->where('id_siswa','S001')->first();
    //return $siswa->nama_siswa;
    //return (array) $siswa;
    return view('siswa', compact('siswa',$siswa));
  }

  function insert_siswa(Request $request){
    $datasiswa = ['id_siswa' => $request->input('id_siswa'),'nama_siswa' => $request->input('nama_siswa')];
    DB::table('siswa')->insert($datasiswa);
    return redirect('tampilsiswa');
  }

  function form_siswa(){
    return view('formsiswa');
  }


  function edit_siswa($id){
    DB::select("select * from siswa where id_siswa = ?", [$id]);
    return view('editsiswa', compact('siswa',$siswa));
  }

  function update_siswa(Request $request,$id){
    $datasiswa = ['id_siswa' => $request->input('id_siswa'),'nama_siswa' => $request->input('nama_siswa'),'jk_siswa' => $request->input('jk_siswa'),'tgl_lahir_siswa' => $request->input('tgl_lahir_siswa')];
    DB::table('siswa')->where('id_siswa',$id)->update($datasiswa);
    return redirect('tampilsiswa');
  }

  function hapus_siswa($id){
    DB::table('siswa')->where('id_siswa',$id)->delete();
    return redirect('tampilsiswa');
  }
}
