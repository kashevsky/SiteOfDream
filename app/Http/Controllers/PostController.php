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
        return view('posts',compact('posts'));

    }
}
