<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posts\Posts;
use App\Events\Posts\PostsCreated;

class PostsController extends Controller
{
//    public function mostrarPosts()
//    {
//        $posts = Posts::all();
//        return view('home.posts')
//            ->with('posts',$posts);
//    }
//
//    public function messages(Message $message)
//    {
//        $messages = $message->with('posts')
//            ->orderBy('id', 'DESC')
//            ->limit(50)
//            ->latest()
//            ->get();
//
//        return response()->json($messages);
//    }
//
//    public function store(Request $request)
//    {
//        $user = auth() -> user();
//
//        $message = auth()->user()->messages()->create([
//            'body' => $request -> body
//        ]);
//
//        $message['user'] = $user;
//
//        broadcast(new MessageCreated($message))->toOthers();
//
//        return response()->json($message, 201);
//    }
}
