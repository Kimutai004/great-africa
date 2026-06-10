@extends('admin.layouts.app')

@section('title','Admin - Edit Post')

@section('content')
    <h1 style="margin:0 0 14px;">Edit Post</h1>

    <form action="/admin/posts/{{ $post->id }}" method="POST" style="display:grid;gap:12px;">
        @csrf
        @method('PUT')

        <div class="admin-card">
            <label><strong>Title</strong></label>
            <input name="title" required value="{{ old('title', $post->title) }}" style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;"/>
        </div>

        <div class="admin-card">
            <label><strong>Category</strong></label>
            <input name="category" value="{{ old('category', $post->category) }}" style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;"/>
        </div>

        <div class="admin-card">
            <label><strong>Excerpt</strong></label>
            <textarea name="excerpt" rows="3" style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;">{{ old('excerpt', $post->excerpt) }}</textarea>
        </div>

        <div class="admin-card">
            <label><strong>Body</strong></label>
            <textarea name="body" rows="6" style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;">{{ old('body', $post->body) }}</textarea>
        </div>

        <div class="admin-card">
            <label><strong>Image Path (optional)</strong></label>
            <input name="image_path" value="{{ old('image_path', $post->image_path) }}" placeholder="/images/..." style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;"/>
        </div>

        <div class="admin-card">
            <label><strong>Status</strong></label>
            <select name="status" required style="width:100%;padding:10px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.03);color:inherit;">
                <option value="draft" @selected(old('status', $post->status)==='draft')>Draft</option>
                <option value="published" @selected(old('status', $post->status)==='published')>Published</option>
            </select>
        </div>

        <div class="admin-actions">
            <button class="btn btn-primary" type="submit">Update</button>
            <a class="btn btn-secondary" href="/admin/posts">Back</a>
        </div>
    </form>
@endsection

