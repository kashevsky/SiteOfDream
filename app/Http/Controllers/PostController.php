<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use \Illuminate\Support\Facades;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $first = Post::first();
        $count = \Illuminate\Support\Facades\DB::table('posts')->count();
        $notImage = \Illuminate\Support\Facades\DB::table('posts')->whereNull('image')->count();
        return view('posts',compact('posts','count','notImage','first'));

    }
}
