<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Post;

class BlogPageController extends Controller
{
    public function index()
    {
        $posts = Post::published()->get();
        return view('pages.blog', compact('posts'));
    }
}

