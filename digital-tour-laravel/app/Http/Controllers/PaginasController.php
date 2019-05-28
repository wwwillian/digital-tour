<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function mostrarHome()
    {
        return view('home');
    }

    public function mostrarCadastro()
    {
        return view('cadastro');
    }

    public function mostrarQuemSomos()
    {
        return view('quemsomos');
    }

    public function mostrarFaq()
    {
        return view('faq');
    }

    public function mostrarContato()
    {
        return view('contato');
    }

    public function mostrarPosts()
    {
        return view('posts');
    }

    public function mostrarPerfil()
    {
        return view('perfil');
    }
}
