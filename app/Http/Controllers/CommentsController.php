<?php

namespace App\Http\Controllers;

use App\Models\Comments\Comments;
use App\Models\Posts\Posts;
use Illuminate\Http\Request;


class CommentsController extends Controller
{
    public function mostrarComments()
    {
        $comments = Comments::all();
        return view('home')
            ->with('comments',$comments);
    }

    public function comments(Request $request)
    {
        $user = auth()->user();
//        $data = $request->all();
        foreach(Posts::all() as $key => $value){
            $posts = $value;
        }


        $comments = new Comments;
        $comments->comments = $request->input('comments');
        $comments->release_date = now();

//        $comments->post_id = $post->id;
        $comments->user_id = $user->id;
        $comments->post_id = $posts->id;
        $comments->save();


        return redirect()
            ->route('home');

    }
}
