<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Friends\Friends;

class AmigosController extends Controller
{
    public function mostrarAmigos()
    {
      return view('perfil');

    }

    public function adicionarAmigos()
    {

    }
}
