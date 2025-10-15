<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:3',
            'body' => 'required|min:10',
        ]
        );

        $post = new Post();
        $post-> title = $request->title;
        $post -> body = $request->body;



        $post->save();

        session()->flash('status', 'Post created succesfully!');

       // return redirect()->route('posts.index'); abajo de forma abreviada
        return to_route('posts.index');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post){

      return view('posts.edit', compact('post'));
    }

    public function update(){
        return 'Update post';
    }
}
