<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
class PostController extends Controller
{   
    public function index()
    {
        //get all posts from Model
        $posts = Post::latest()->get();

        //passing posts to view
        return view('posts', compact('posts'));
    }
}
