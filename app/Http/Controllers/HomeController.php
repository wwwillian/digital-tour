<?php

namespace App\Http\Controllers;

use App\Models\Posts\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class HomeController extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('id', 'desc')
            ->get();

        return view('feed')
            ->with('posts', $posts);
    }

    public function postsUpdate(Request $request)
    {

        $data = $request->all();
        $user = auth()->user();

        $request->validate([
            'texttitule',
            'text',
            'photo'
        ]);

        if (Input::file('photo')) {
            $photo = Input::file('photo');
            $extensao = $photo->getClientOriginalExtension();
            if ($extensao != 'jpg' && $extensao != 'png' && $extensao != 'jpeg') {
                return redirect()
                    ->route('home')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');
            }
        }

        $post = new Posts;
        $post->description = $request->input('description');
        $post->release_date = now();
        $post->photo = '';
        $post->user_id = $user->id;

        $post->save();

        if (Input::file('photo')) {
            $name = kebab_case($request->name) . uniqid($post->id);
            $extension = $request->photo->extension();
            $nameImage = "{$name}.$extension";
            $data['photo'] = $nameImage;

            $upload = $request->photo->storeAs('posts', $nameImage);

            if (!$upload)
                return redirect()
                    ->route('profile')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');
        }
        $post->update($data);

        return redirect()
            ->back()
            ->with('success', 'Atualizado com Sucesso!');
    }
}
