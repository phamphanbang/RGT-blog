<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function create(Request $request)
    {
        # code...
        return view('posts.createPost');
    }

    public function store(Request $request)
    {
        # code...
        // dd($request->body);
        $post = new Post;
        $post->author_id = $request->user()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return view('posts.createPost');
    }
}
