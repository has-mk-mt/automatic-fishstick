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
        $posts = Post::latest()->get();
        return view('index')->with(['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->event = $request->event;
        $post->thought = $request->thought;
        $post->emotion = $request->emotion;
        $post->user_id = auth()->id();
        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        $this->authorize('update', $post);

        $post->title = $request->title;
        $post->event = $request->event;
        $post->thought = $request->thought;
        $post->emotion = $request->emotion;
        $post->save();

        return redirect()->route('posts.show', $post)->with('success', '投稿が保存されました！');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);

        $post->delete();

        return redirect()->route('posts.index');
    }

}
