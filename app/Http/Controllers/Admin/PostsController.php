<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostsController extends AdminBaseController
{
    public function index()
    {
        $posts = Post::orderByDesc('published_at')->orderByDesc('id')->paginate(12);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'body' => ['nullable', 'string'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:draft,published'],
        ]);

        if ($data['status'] === 'published') {
            $data['published_at'] = now();
        } else {
            $data['published_at'] = null;
        }

        Post::create($data);
        return redirect()->route('admin.posts.index')->with('success', 'Post created.');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category' => ['nullable', 'string', 'max:255'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'body' => ['nullable', 'string'],
            'image_path' => ['nullable', 'string', 'max:255'],
            'status' => ['required', 'in:draft,published'],
        ]);

        if ($data['status'] === 'published') {
            $data['published_at'] = now();
        } else {
            $data['published_at'] = null;
        }

        $post->update($data);
        return redirect()->route('admin.posts.index')->with('success', 'Post updated.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted.');
    }
}

