<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Comment;
use DB;
class PostController extends Controller
{
    public function post()
    {
        $post=Post::all();
        return view('posts',compact('post'));
    }


    public function show(Post $post)
    {  
      //  dd($post->id);
        $comeent=Comment::where('commentable_id',$post->id)->get();
      //  dd($comeent);
        return view('singlepost',compact('post','comeent'));
    }

}