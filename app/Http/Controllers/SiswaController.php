<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    //
    function tampil_siswa(){
      //raw query
      $siswa = DB::select("select * from siswa");
      //return $siswa;
      return view('siswa', compact('siswa',$siswa));
    }

    function insert_siswa(Request $request){
      //$datasiswa = $request->except('_token');
      $datasiswa = [$request->input('id_siswa'),$request->input('nama_siswa'),$request->input('jk_siswa'),$request->input('tgl_lahir_siswa')];
      $idsiswa = $request->input('id_siswa');
      //return $datasiswa;
      //$datasiswa = ['S003', 'Bia 003', 'L', '07-07-1990'];
      $run = DB::insert("insert into siswa values(?,?,?,?)",$datasiswa);
      return redirect('tampilsiswa');
    }

    function form_siswa(){
      return view('formsiswa');
    }

    function edit_siswa($id){
      $siswa = DB::select("select * from siswa where id_siswa = ?", [$id]);
      //return $siswa;
      return view('editsiswa', compact('siswa',$siswa));
    }

    function update_siswa(Request $request,$id){
      $datasiswa = [$request->input('id_siswa'),$request->input('nama_siswa'),$request->input('jk_siswa'),$request->input('tgl_lahir_siswa'),$id];
      $run = DB::update("update siswa set id_siswa = ?, nama_siswa = ?, jk_siswa = ?,tgl_lahir_siswa = ? where id_siswa = ?",$datasiswa);
      return redirect('tampilsiswa');
    }

    function hapus_siswa($id){
      DB::delete("delete from siswa where id_siswa = ?", [$id]);
      return redirect('tampilsiswa');
    }
}
