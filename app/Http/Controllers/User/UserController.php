<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {
        return view('users.profile');
    }

    public function profileUpdate(Request $request)
    {
        $user = auth()->user();//return objeto model User
        
            try
            {
            //destroy the request, to save the new request´s
            if($request->email)
            {
                unset($user->email);
            }
            
            if($request->password)
            {
                $user->passowrd = bcrypt($user->password);
            }
            else
            {
                unset($user->passowrd);
            }

            /*
            *stores the user's image
            */
            if($request->hasFile('image') && $request->file('image')->isValid())
            {

                if($user->image && Storage::exists("user/{$user->image}"))
                {
                    Storage::delete("user/{$user->image}");
                }
                    
            }
            if($request->hasFile('image') && $request->file('image')->isValid())
            {
                
                $user->image = $request->image->store('user');
                
            }

            /*
            *stores the user's cupImage
            *profile cover image
            */
            if($request->hasFile('cupPhoto') && $request->file('cupPhoto')->isValid())
            {
                if($user->cupPhoto && Storage::exists("user/{$user->cupPhoto}"))
                {
                    Storage::delete("user/{$user->cupPhoto}");
                }
            }
            
            if($request->hasFile('cupPhoto'))
            {
                    $user->cupPhoto = $request->cupPhoto->store('cupPhoto');       
            }
            $user->save();

            return redirect()
                ->route('profile')
                ->with('success', 'Atualizado com Sucesso!');
            }
            catch(Exception $e)
            {
                return redirect()
                    ->route('profile')
                    ->with('erro', 'Falha ao atualizar o perfil: ',$e->getMessage(), "\n");
            }
        
        }
    

}//fim class
