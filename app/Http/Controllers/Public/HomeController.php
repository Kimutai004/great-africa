<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::published()
            ->orderByDesc('published_at')
            ->take(3)
            ->get();

        $events = Event::published()
            ->take(3)
            ->get();

        return view('pages.home', compact('posts', 'events'));
    }
}
