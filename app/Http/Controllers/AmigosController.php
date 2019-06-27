<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Friends\Friends;
use Illuminate\Support\Facades\Auth;

class AmigosController extends Controller
{
    public function mostrarAmigos()
    {
        $friends = $this->friend(Auth::user()->id);
        return view('amizade')
            ->with('friends', $friends);

    }
    public function friend($id)
    {
        $friends = Friends::where("user_id", "=", $id)
        ->join('users', 'users.id', '=', 'friends.friend_id')
            ->get();

    return $friends;
    }

    public function pesquisar(Request $request)
    {
        $friends= User::where('name','like','%'.$request->pesquisa.'%')->get();
        return view('amizade')->with('friends', $friends);
    }
}
