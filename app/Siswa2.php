<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Siswa2 extends Model
{
    //
    protected $table = "siswa";
    protected $fillable = ['nama_siswa','jk_siswa','tgl_lahir_siswa'];
    protected $primaryKey = 'id_siswa';
    //protected $increment = false;

    function tampil_siswa(){
      //$siswa = DB::table('siswa')->get();
      $siswa = DB::table($this->table)->get();
      return $siswa;
    }
}
