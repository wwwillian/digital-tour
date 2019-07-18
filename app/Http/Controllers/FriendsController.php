<?php

namespace App\Http\Controllers;

use App\Models\Friends\Friends;
use App\Models\Perfil\Gallerys;
use App\Models\Posts\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class FriendsController extends Controller
{
    public function index()
    {
        $friends = $this->amizades(Auth::user()->id);
        $posts = $this->seusPosts(Auth::user()->id);
        return view('perfil')
            ->with('friends', $friends)
            ->with('posts', $posts);
    }

    public function usuario($id)
    {
        $amigos = User::where("user_id", "=", $id)
            ->join('users', 'users.id', '=', 'friends.user_id');
        return $amigos;
    }

    public function seusPosts($id)
    {
        $posts = Posts::orderBy('posts.id', 'desc')
            ->where("user_id", "=", $id)
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->get();
        return $posts;
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = auth()->user();
        foreach (Posts::all() as $key => $value) {
            $posts = $value;
        }

        $request->validate([
            'photo',
            'comments'
        ]);

        if (Input::file('photo')) {
            $photo = Input::file('photo');
            $extensao = $photo->getClientOriginalExtension();
            if ($extensao != 'jpg' && $extensao != 'png' && $extensao != 'jpeg') {
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');
            }
        }

        $gallerys = new Gallerys;
        $gallerys->comments = $request->input('comments');
        $gallerys->photo = '';
        $gallerys->user_id = $user->id;

        $gallerys->save();

        if ($request->hasFile('photo') && $request->file('photo')->isValid()) {

            if ($user->photo && Storage::exists("user/{$gallerys->photo}"))
                Storage::delete("photo/{$gallerys->photo}");

            if (Input::file('photo')) {
                $name = kebab_case($request->name) . uniqid($gallerys->id);
                $extension = $request->photo->extension();
                $nameImage = "{$name}.$extension";
                $data['photo'] = $nameImage;

                $upload = $request->photo->storeAs('gallerys', $nameImage);

                if (!$upload)
                    return redirect()
                        ->route('perfil')
                        ->with('erro', 'Falha ao fazer o upload da imagem fundo');
            }
        }
        $gallerys->update($data);

        return redirect()
            ->route('perfil')
            ->with('success', 'Atualizado com Sucesso!');
    }

    public function exibirFotos()
    {

        $foto = Gallerys::all();

        foreach ($foto as $key => $value) {
            if ($value->user_id == auth()->user()->id) {
                $foto = $value->user_id;
            }
        }
        return view('perfil')
            ->with('gallery', $foto);
    }

    public function posts($id)
    {
        $posts = Posts::orderBy('posts.id', 'desc')
            ->get();

        return $posts;
    }


    public function amigos($id)
    {
        $amigos = Friends::where("user_id", "=", $id)
            ->join('users', 'users.id', '=', 'friends.friend_id')
            ->get();
        return $amigos;
    }

    public function show($id)
    {
        $botao = Friends::where("user_id", "=", $id)->get();
        $amigo = User::find($id);
        $posts = $this->posts(Auth::user()->id);
        $amigos = $this->amigos($id);
        return view('perfil-amigos')
            ->with('amigo', $amigo)
            ->with('amigos', $amigos)
            ->with('botao', $botao)
            ->with('posts', $posts);
    }

    public function amizades($id)
    {
        $friends = Friends::where("user_id", "=", $id)
            ->join('users', 'users.id', '=', 'friends.friend_id')
            ->get();

        return $friends;
    }

    public function adicionarAmigo(Request $request)
    {
        $data = $request->all();

        $friend = new Friends;
        $friend->user_id = $request->input('user_id');
        $friend->friend_id = $request->input('friend_id');
        $friend->add = $request->input('add');

        $friend->save();

        return redirect()
            ->back()
            ->with('success', 'Atualizado com Sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        ///img/user.png
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $friend = Friends::find($id);
        if (isset($friend)) {
            $friend->delete();
            return redirect()->back();
        }
        return response('Amigo não encontrado', 404);
    }

    public function seusPostsUpdate(Request $request)
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
