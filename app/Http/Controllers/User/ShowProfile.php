<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShowProfile extends Controller
{
    //
    function __invoke($nama){
      return "Ini Contoh Single Action Controller, nama profile : ".$nama;
    }

}
