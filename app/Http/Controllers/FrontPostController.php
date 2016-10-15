<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class FrontPostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(7);
        return view('front.blog.index')->with(['posts'=>$posts]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('front.blog.detail')->with(['post' => $post]);
    }

    public function postsBy($id)
    {
        $posts = \App\Post::where('user_id', $id)->paginate(7);
        return view('front.blog.index')->with(['posts' => $posts]);
    }
}
