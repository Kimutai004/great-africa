@extends('admin.layouts.app')

@section('title','Admin - Edit Post')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>Edit Post</h1>
            <div class="crumb">Edit post #{{ $post->id }}</div>
        </div>
    </div>

    <form action="/admin/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data" class="form-section">
        @csrf
        @method('PUT')

        <div class="form-field">
            <label class="form-label" for="title">Title</label>
            <input id="title" name="title" required value="{{ old('title', $post->title) }}" class="form-input" />
        </div>

        <div class="form-field">
            <label class="form-label" for="category">Category</label>
            <input id="category" name="category" value="{{ old('category', $post->category) }}" class="form-input" />
        </div>

        <div class="form-field">
            <label class="form-label" for="excerpt">Excerpt</label>
            <textarea id="excerpt" name="excerpt" rows="3" class="form-textarea">{{ old('excerpt', $post->excerpt) }}</textarea>
        </div>

        <div class="form-field">
            <label class="form-label" for="body">Body</label>
            <textarea id="body" name="body" rows="10" class="form-textarea">{{ old('body', $post->body) }}</textarea>
        </div>

        <div class="form-field">
            <label class="form-label" for="image">Upload Image (optional)</label>
            <input type="file" id="image" name="image" accept="image/*" style="width:100%;padding:10px 0;" />
            @if(!empty($post->image_path))
                <div style="margin-top:10px;">
                    <div style="font-weight:900; font-size:11px; color:#0F533C; margin-bottom:6px;">Current Image</div>
                    <img src="{{ $post->image_path }}" alt="{{ $post->title }}" style="width:100%; max-width:420px; border-radius:12px; border:1px solid rgba(15,83,60,0.18);" />
                </div>
            @endif
        </div>

        <div class="form-field">
            <label class="form-label" for="status">Status</label>
            <select id="status" name="status" required class="form-select">
                <option value="draft" @selected(old('status', $post->status)==='draft')>Draft</option>
                <option value="published" @selected(old('status', $post->status)==='published')>Published</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-save">Update Post</button>
            <a class="btn-back" href="/admin/posts">Back</a>
        </div>
    </form>
@endsection
