<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{


    public function __construct(){
        $this->middleware('auth')->except   ('index', 'show');
    }
    public function index()
    {
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post()]);
    }

    public function store(SavePostRequest $request)
    {
        Post::create($request->validated());

        return to_route('posts.index')
            ->with('status', 'Post created successfully!');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post){

      return view('posts.edit', compact('post'));
    }

    public function update(SavePostRequest $request, Post $post){

        $post->update($request->validated());

        return to_route('posts.show', $post)
            ->with('status', 'Post updated successfully!');
    }

    public function destroy(Post $post){
        $post->delete();

        return to_route('posts.index')
            ->with('status', 'Post deleted successfully!');
    }
}
