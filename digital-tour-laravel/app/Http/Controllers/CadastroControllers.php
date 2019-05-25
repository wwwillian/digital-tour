<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroControllers extends Controller
{
    public function mostrarCadastro(){
      return view ('cadastro');
    }
}
