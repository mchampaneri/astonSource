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
        $posts = Post::auth()->get();
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
        if(isset($request->thumb)) {
            $file = $request->file('thumb')
                ->store(\Auth::user()->id . '/posts/thumb');
            $post->thumb = $file;
        }
        else {
            $post->thumb = 'mi.png';
        }
        $post->user_id = \Auth::user()->id;
        $post->detail = b64toUrl($request->detail);
        $post->save();
        flash()->success('Post Saved Succesfully');
        return redirect()->route('posts.index');
    }

    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        if(isset($request->thumb)) {
            $file = $request->file('thumb')
                ->store(\Auth::user()->id . '/posts/thumb');
            $post->thumb = $file;
        }
        else {
            $post->thumb = 'mi.png';
        }
        $post->detail = b64toUrl($request->detail);
        $post->save();
        flash()->success('Post Updated Succesfully');
        return redirect()->route('posts.index');
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

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        flash()->success('Post Deleted Succesfully');
        return redirect()->route('posts.index');
    }
}
