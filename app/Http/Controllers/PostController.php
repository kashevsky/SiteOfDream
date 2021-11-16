<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use \Illuminate\Support\Facades;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::find(1);
        $posts = Post::all();
        $notImage = Post::whereNull('image')->count();
        return view('posts',compact('posts','post'));

    }
}
