<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;
use Intervention\Image\Facades\Image;
use JavaScript;
use Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('user_id',\Auth::user()->id);
        return view('workspace.faculty.posts.index')->with(['posts'=>$posts]);
    }

    public function create()
    {
        return view('workspace.faculty.posts.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $file = $request->file('thumb')
                ->store(\Auth::user()->id.'/posts/thumb');
        $post->thumb = $file;
        $post->user_id = \Auth::user()->id;
        $post->detail = b64toUrl($request->detail);
        $post->save();
    }

    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $post->title = $post->title;
        $file =$request->file('thumb')
                        ->store(\Auth::user()->id.'/posts/thumb');
        $post->thumb = $file;
        $post->detail = b64toUrl($request->detail);
        $post->save();
        return redirect()->back();
    }

    public function edit($id)
    {
        $post = Post::find($id);
        JavaScript::put([
            'image'=>$post->thumb
        ]);
        return view('workspace.faculty.posts.edit')
                    ->with(['post'=>$post]);
    }
}
