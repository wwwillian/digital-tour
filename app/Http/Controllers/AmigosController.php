<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Friends\Friends;

class AmigosController extends Controller
{
    public function mostrarAmigos()
    {
        return view('amizade');

    }

    public function pesquisar(Request $request)
    {
//        $dados = [];
//        $dados['url'] = url('/');
//        $dados['posts'] = User::where('image','nome','%'.$request->input('pesquisar').'%')->where('ativo','=',true)->get();
//        foreach ($dados['posts'] as $key => $value) {
//            $dados['posts'][$key]->name = RelacaoPostCategoria::
//            join('categorias','relacao_post_categoria.categoria_id','=','categorias.id')
//                ->where('relacao_post_categoria.post_id','=',$dados['posts'][$key]->id)
//                ->first()->name;
//        }
//        return response()->json($dados);
    }
}
