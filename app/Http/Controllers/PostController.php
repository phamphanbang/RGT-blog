<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function create(Request $request)
    {
        return view('posts.createPost');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->author_id = $request->user()->id;
        $post->title = $request->title;
        $post->body = $request->body;
        if ($request->has("publish")) {
            $post->public = 1;
        } else {
            $post->public = 0;
        }
        $post->save();
        return view('posts.createPost');
    }

    public function index(Request $request)
    {
        $data["user"] = User::find($request->id);
        if ($request->type == "public") {
            $data["posts"] = Post::where('public', 1)->paginate(2);
        } elseif ($request->type == "draft") {
            $data["posts"] = Post::where('public', 0)->paginate(2);
        } else {
            $data["posts"] = Post::paginate(2);
        }

        return view('posts.indexPost')->with('data', $data);
    }
}
