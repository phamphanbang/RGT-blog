<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //

    public function show($id )
    {
        // $user = DB::table('users')->where('id',$data)->first();
        // $user = User::find($id);
        // $posts = $user->posts()->count();
        // $comments = $user->comments()->count();
        $data["user"] = User::find($id);
        $data["posts"] = $data["user"]->posts()->get();
        $data["comments"] = $data["user"]->comments()->count();
        return view('userProfile')->with('data',$data);
    }
}
