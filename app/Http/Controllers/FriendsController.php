<?php

namespace App\Http\Controllers;

use App\Models\Friends\Friends;
use App\Models\Perfil\Gallerys;
use App\Models\Posts\Posts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class FriendsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallerys::where("user_id",1)->first();
        $amigos = $this->usuario();

        return view('perfil',["amigos"=>$amigos])
            ->with('gallery', $gallery);
    }

    public function usuario()
    {
        $amigos = User::all();
        
        return $amigos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $user = auth()->user();
        foreach(Posts::all() as $key => $value){
            $posts = $value;
        }

        $request->validate([
            'photo',
            'comments'
        ]);

        if(Input::file('photo1')) {
            $photo = Input::file('photo1');
            $extensao = $photo->getClientOriginalExtension();
            if ($extensao != 'jpg' && $extensao != 'png' && $extensao != 'jpeg') {
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');
            }
        }

        if(Input::file('photo2')) {
            $photo = Input::file('photo2');
            $extensao = $photo->getClientOriginalExtension();
            if ($extensao != 'jpg' && $extensao != 'png' && $extensao != 'jpeg') {
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');
            }
        }

        if(Input::file('photo3')) {
            $photo = Input::file('photo3');
            $extensao = $photo->getClientOriginalExtension();
            if ($extensao != 'jpg' && $extensao != 'png' && $extensao != 'jpeg') {
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');
            }
        }

        if(Input::file('photo4')) {
            $photo = Input::file('photo4');
            $extensao = $photo->getClientOriginalExtension();
            if ($extensao != 'jpg' && $extensao != 'png' && $extensao != 'jpeg') {
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');
            }
        }

        if(Input::file('photo5')) {
            $photo = Input::file('photo5');
            $extensao = $photo->getClientOriginalExtension();
            if ($extensao != 'jpg' && $extensao != 'png' && $extensao != 'jpeg') {
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');
            }
        }

        if(Input::file('photo6')) {
            $photo = Input::file('photo6');
            $extensao = $photo->getClientOriginalExtension();
            if ($extensao != 'jpg' && $extensao != 'png' && $extensao != 'jpeg') {
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');
            }
        }

        $gallerys = new Gallerys;
        $gallerys->comments= $request->input('comments');
        $gallerys->photo1 = '';
        $gallerys->photo2 = '';
        $gallerys->photo3 = '';
        $gallerys->photo4 = '';
        $gallerys->photo5 = '';
        $gallerys->photo6 = '';
        $gallerys->user_id = $user->id;
        $gallerys->post_id = $posts->id;

        $gallerys->save();

        if($request->hasFile('photo1') && $request->file('photo1')->isValid()) {

            if ($user->photo1 && Storage::exists("user/{$gallerys->photo1}"))
                Storage::delete("photo1/{$gallerys->photo1}");

            if (Input::file('photo1')) {
                $name = kebab_case($request->name) . uniqid($gallerys->id);
                $extension = $request->photo1->extension();
                $nameImage = "{$name}.$extension";
                $data['photo1'] = $nameImage;

                $upload = $request->photo1->storeAs('gallerys', $nameImage);

                if (!$upload)
                    return redirect()
                        ->route('perfil')
                        ->with('erro', 'Falha ao fazer o upload da imagem fundo');

            }
        }
        if(Input::file('photo2'))
        {
            $name = kebab_case($request->name).uniqid($gallerys->id);
            $extension = $request->photo2->extension();
            $nameImage = "{$name}.$extension";
            $data['photo2'] = $nameImage;

            $upload = $request->photo2->storeAs('gallerys', $nameImage);

            if(!$upload)
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');

        }
        if(Input::file('photo3'))
        {
            $name = kebab_case($request->name).uniqid($gallerys->id);
            $extension = $request->photo3->extension();
            $nameImage = "{$name}.$extension";
            $data['photo3'] = $nameImage;

            $upload = $request->photo3->storeAs('gallerys', $nameImage);

            if(!$upload)
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');

        }
        if(Input::file('photo4'))
        {
            $name = kebab_case($request->name).uniqid($gallerys->id);
            $extension = $request->photo4->extension();
            $nameImage = "{$name}.$extension";
            $data['photo4'] = $nameImage;

            $upload = $request->photo4->storeAs('gallerys', $nameImage);

            if(!$upload)
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');

        }
        if(Input::file('photo5'))
        {
            $name = kebab_case($request->name).uniqid($gallerys->id);
            $extension = $request->photo5->extension();
            $nameImage = "{$name}.$extension";
            $data['photo5'] = $nameImage;

            $upload = $request->photo5->storeAs('gallerys', $nameImage);

            if(!$upload)
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');

        }
        if(Input::file('photo6'))
        {
            $name = kebab_case($request->name).uniqid($gallerys->id);
            $extension = $request->photo6->extension();
            $nameImage = "{$name}.$extension";
            $data['photo6'] = $nameImage;

            $upload = $request->photo6->storeAs('gallerys', $nameImage);

            if(!$upload)
                return redirect()
                    ->route('perfil')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');

        }
        $gallerys->update($data);

        return redirect()
            ->route('perfil')
            ->with('success', 'Atualizado com Sucesso!');
    }

    public function exibirFotos(){

        $foto = Gallerys::all();

        foreach ($foto as $key => $value){
            if($value->user_id == auth()->user()->id){
                $foto = $value->user_id;
            }
        }
        return view('perfil')
            ->with('gallery', $foto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $amigo = User::find($id);
        // $friends = $this->amizades();
        //     return view('perfil-amigos', ["friends"=>$friends])
        //         ->with('amigo', $amigo);
        $amigo = User::find($id);
        

        return view('perfil-amigos')->with('amigo', $amigo);
    }
    // $gallery = Gallerys::where("user_id",1)->first();
    // $amigos = $this->usuario();

    // return view('perfil',["amigos"=>$amigos])
    //     ->with('gallery', $gallery);
    public function amizades()
    {
        $friends = Friends::all();

        return $friends;
    }

    public function adicionarAmigo(Request $request)
    {
        $data = $request->all();
        
        $friend = new Friends;
        $friend->user_id = $request->input('user_id');
        
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
        //
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
        //
    }
    // public function indexJson()
    // {
    //     $amigos = User::all();

    //     return json_encode($amigos);
    // }
}
