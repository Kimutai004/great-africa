@extends('admin.layouts.app')

@section('title','Admin - Edit Post')

@section('content')
    <h1 style="margin:0 0 14px;">Edit Post</h1>

    <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data" style="display:grid;gap:12px;">

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
            <label><strong>Upload Image (optional)</strong></label>
            <input class="form-control" type="file" name="image" accept="image/*"/>
            <div style="margin-top:10px;">
                @if(!empty($post->image_path))
                    <div style="font-weight:900; font-size:12px; color:rgba(16,185,129,.95); margin-bottom:6px;">Current Image</div>
                    <img src="{{ $post->image_path }}" alt="{{ $post->title }}" style="width:100%; max-width:420px; border-radius:14px; border:1px solid rgba(16,185,129,.18); box-shadow:0 12px 30px rgba(15,23,42,.08);"/>
                @endif
            </div>
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

