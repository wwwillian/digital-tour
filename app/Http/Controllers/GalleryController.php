<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\P2ost;

class GalleryController extends Controller
{
    public function index() {
        return P2ost::all();
    }

    public function store(Request $request) {
        $post = new P2ost();

        $path = $request->file('arquivo')->store('imagens', 'public');

        $post->titulo    = $request->titulo;
        $post->subtitulo = $request->subtitulo;
        $post->mensagem  = $request->mensagem;
        $post->arquivo   = $path;
        $post->likes     = 0;

        $post->save();

        return response($post, 200);
    }

    public function destroy($id) {
        $post = P2ost::find($id);
        if (isset($post)) {
            Storage::disk('public')->delete($post->arquivo);
            $post->delete();
            return 204;
        }
        return response('Post nao encontrado', 404);
    }

    public function like($id) {
        $post = P2ost::find($id);
        if (isset($post)) {
            $post->likes++;
            $post->save();
            return $post;
        }
        return response('ID nao encontrado', 404);
    }

}
