<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function mostrarIndex()
    {
        return view('index');
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

    public function mostrarGallery()
    {
        return view('gallery');
    }

    public function mostrarArtigos()
    {
        return view('artigos');
    }
}

