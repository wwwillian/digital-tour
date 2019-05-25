<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sobrenosControllers extends Controller
{
   public function mostarSobrenos (){
     return view ('sobrenos');
   }
}
