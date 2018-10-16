<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class Userscontroller extends Controller
{
    //
    function __construct(){
      echo "ini construct <br>";
    }

    function show($id){
      return "id user : ". $id;
    }

    function tampilNama($nama){
      return "Nama saya adalah " . $nama;
    }

    function __destruct(){
      echo "<br> ini destruct";
    }
}
