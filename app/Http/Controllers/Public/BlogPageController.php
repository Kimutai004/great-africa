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

    public function show(Post $post)
    {
        abort_unless($post->status === 'published', 404);

        // Provide posts for the “related articles” sidebar.
        $posts = Post::query()
            ->published()
            ->where('id', '!=', $post->id)
            ->orderByDesc('published_at')
            ->take(8)
            ->get();

        return view('pages.post', compact('post', 'posts'));
    }
}



