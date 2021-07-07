<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //

    public function show($data )
    {
        //dd($data);
        //$user = auth()->user();
        // $user = DB::table('users')->where('id',$data)->first();
        $user = User::find($data);
        $post = $user->posts()->count();
        return view('userProfile')->with('user',$user)->with('posts',$post);
    }
}
