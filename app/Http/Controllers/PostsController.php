<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = auth()->check() ? Post::latest()->get() : Post::latest()->where('active', true)->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        $active = request('active');

        auth()->user()->publish(
            new Post([
                'title' => request('title'),
                'body' => request('body'),
                'active' => $active === null ? 0 : $active,
                'published_at' => date('Y-m-d H:i:s'),
            ])
        );

        return redirect('/');
    }

    public function update()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
            'id' => 'required',
        ]);

        $active = request('active');

        Post::findOrFail(request('id'))->fill([
            'title' => request('title'),
            'body' => request('body'),
            'active' => $active === null ? 0 : $active,
        ])->save();

        return redirect('/');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/');
    }
}
