<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    function tampil(){
      return "ini halaman about dari controller";
    }

    function tampil_view(){
      return view('about');
    }

    function tampil_view2(){
      return view('tentang');
    }
}
