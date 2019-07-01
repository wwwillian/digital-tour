<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Perfil\Gallerys;
use App\Models\User;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallerys::all();
    }

    public function store(Request $request)
    {
        var_dump($request);
        $post = new Gallerys;

        $path = $request->file('arquivo')->store('gallery', 'public');
        
        $post->name = $request->name;
        $post->email = $request->email;
        $post->titulo = $request->titulo;
        $post->subtitulo = $request->subtitulo;
        $post->comments = $request->comments;
        $post->mensagem = $request->mensagem;
        $post->arquivo = $path;
        $post->likes = 0;       
        $post->save();

        return response($post, 200);
    }

    public function destroy($id)
    {
        $post = Gallerys::find($id);
        if (isset($post)){
            Storage::disk('public')->delete($post->arquivo);
            $post->delete();
            return 204;
        }
        return reponse('Foto não encontrada', 404);
    }

    public function like($id)
    {
        $post = Gallerys::find($id);
        if (isset($post)){
            $post->like++;
            $post->save();
            return $post;
        }
        return response('ID não encontrado', 404);
    }
}
