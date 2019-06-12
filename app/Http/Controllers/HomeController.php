<?php

namespace App\Http\Controllers;

use App\Models\Posts\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {

        $posts = Posts::paginate(15);
        return view('home')
            ->with('posts', $posts);
    }
//    public function exibirDetalhe($id)
//    {
//        $posts = Posts::find($id);
//        return view('')->with('filme', $filme);
//    }
//    public function adicionarFilme()
//    {
//        return view('filme-adicionar');
//    }
    public function postsUpdate(Request $request)
    {
        $request->validate([
            'texttitule',
            'text',
            'photo'
        ]);
        if(Input::file('photo'))
        {
            $photo = Input::file('photo');
            $extensao = $photo->getClientOriginalExtension();
        }
        if($extensao != 'jpg' && $extensao != 'png' &&  $extensao != 'jpeg')
        {
            return redirect()
                ->route('home')
                ->with('erro', 'Falha ao fazer o upload da imagem fundo');
        }

        $post = new Posts;
        $post->texttitule = $request->input('texttitule');
        $post->text = $request->input('text');
        $post->release_date = now();
        $post->photo = '';
        $post->save();
        if(Input::file('photo'))
        {
            Input::file('photo')::move($photo,public_path().'/imagem-post/post-id_'.$post->id.'.'.$extensao);
            $post->photo = public_path().'/imagem-post/post-id_'.$post->id.'.'.$extensao;
            $post->save();
        }

        return redirect()
            ->route('home')
            ->with('success', 'Atualizado com Sucesso!');
    }
//    public function editarFilme($id)
//    {
//        $filme = Filme::find($id);
//        return view("filme-editar")->with('filme', $filme);
//    }
//    public function gravarFilme(Request $request, $id)
//    {
//        $request->validate([
//            'title'=>'required|max:60|unique:movies',
//            'rating'=>'required|numeric|between:1,10'
//        ]);
//        $filme = Filme::find($id);
//        $filme->title = $request->input('title');
//        $filme->rating = $request->input('rating');
//        $filme->save();
//        return redirect('/filmes');
//    }
//    public function excluirFilme($id)
//    {
//        $filme = Filme::find($id);
//        $filme -> delete();
//        return redirect('/filmes');
//    }
}

