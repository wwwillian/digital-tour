<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profile()
    {
        return view('users.profile');
    }

    public function profileUpdate(Request $request)
    {
        $user = auth()->user();
        $data = $request->all();

        if($request->email)
            unset($data['email']);

        if($request->password)
            $data['password'] = bcrypt($data['password']);
        else
            unset($data['password']);

        if($request->hasFile('image') && $request->file('image')->isValid()){

            if ($user->image && Storage::exists("user/{$user->image}"))
                Storage::delete("user/{$user->image}");

            $name = kebab_case($request->name).uniqid($user->id);
            $extension = $request->image->extension();
            $nameImage = "{$name}.$extension";
            $data['image'] = $nameImage;

            $upload = $request->image->storeAs('users', $nameImage);

            if(!$upload)
                return redirect()
                    ->route('profile')
                    ->with('erro', 'Falha ao fazer o upload da imagem perfil');
        }

        if($request->hasFile('cupphoto') && $request->file('cupphoto')->isValid()){

            if ($user->cupphoto && Storage::exists("user/{$user->cupphoto}"))
                   Storage::delete("user/{$user->cupphoto}");


            $namefundo = kebab_case($request->name).uniqid($user->id);
            $extensionfundo = $request->cupphoto->extension();
            $namecupphoto = "{$namefundo}.$extensionfundo";
            $data['cupphoto'] = $namecupphoto;

            $uploadfundo = $request->cupphoto->storeAs('usersfundo', $namecupphoto);

            if(!$uploadfundo)
                return redirect()
                    ->route('profile')
                    ->with('erro', 'Falha ao fazer o upload da imagem fundo');
        }
        $user->update($data);
        return redirect()
            ->route('perfil')
            ->with('success', 'Atualizado com Sucesso!');
    }
}
