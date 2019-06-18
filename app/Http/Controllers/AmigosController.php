<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Friends\Friends;

class AmigosController extends Controller
{
    public function mostrarAmigos()
    {
        $amigos = User::all();

        dd($amigos);
        return view('perfil')
            ->with('amigos', $amigos);
    }

    public function pesquisarAmigos()
    {

    }
}
