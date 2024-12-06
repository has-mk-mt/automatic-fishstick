<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use App\Models\Comment;

class PostController extends Controller
{

    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();
        //すべて　新しい順　簡単に書く新しい順
        return view('index')->with(['posts' => $posts]);
    }

    // public function show($id)
    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);
        //Post型のpostにすると（inmlicit binding）↑の処理は不要になる
        //urlから渡されたidをもとに暗黙的にモデルのデータに結び付けてくれる

        return view('posts.show')->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'event' => 'required|min:5',
        //     'thought' => 'required',
        //     'emotion' => 'required',
        // ]);

        $post = new Post();
        $post->title = $request->title;
        $post->event = $request->event;
        $post->thought = $request->thought;
        $post->emotion = $request->emotion;
        $post->save();

        return redirect()->route('posts.index');
    }
    //受け取るデータ型がRequest型
    //$requestの->は、create/blade.phpで設定したname属性

    public function edit(Post $post)
    {
        // $post = Post::findOrFail($id);
        //Post型のpostにすると（inmlicit binding）↑の処理は不要になる
        //urlから渡されたidをもとに暗黙的にモデルのデータに結び付けてくれる

        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'event' => 'required|min:5',
        //     'thought' => 'required',
        //     'emotion' => 'required',
        // ]);

        $post->title = $request->title;
        $post->event = $request->event;
        $post->thought = $request->thought;
        $post->emotion = $request->emotion;
        $post->save();

        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }

}
