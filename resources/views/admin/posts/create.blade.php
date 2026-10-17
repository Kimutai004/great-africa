@extends('admin.layouts.app')

@section('title','Admin - Create Post')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>Create Post</h1>
            <div class="crumb">Add a news/blog post and publish when ready</div>
        </div>
    </div>

    <form action="/admin/posts" method="POST" enctype="multipart/form-data" class="form-section">
        @csrf

        <div class="form-field">
            <label class="form-label" for="title">Title</label>
            <input id="title" name="title" required value="{{ old('title') }}" class="form-input" placeholder="Post title" />
        </div>

        <div class="form-field">
            <label class="form-label" for="category">Category</label>
            <input id="category" name="category" value="{{ old('category') }}" placeholder="News / Insight / Story" class="form-input" />
        </div>

        <div class="form-field">
            <label class="form-label" for="excerpt">Excerpt</label>
            <textarea id="excerpt" name="excerpt" rows="3" class="form-textarea">{{ old('excerpt') }}</textarea>
        </div>

        <div class="form-field">
            <label class="form-label" for="body">Body</label>
            <textarea id="body" name="body" rows="10" class="form-textarea">{{ old('body') }}</textarea>
        </div>

        <div class="form-field">
            <label class="form-label" for="image">Upload Image (optional)</label>
            <input type="file" id="image" name="image" accept="image/*" style="width:100%;padding:10px 0;" />
            <div class="form-hint">Accepted: JPG/PNG/WebP. This will be uploaded and shown on the blog.</div>
        </div>

        <div class="form-field">
            <label class="form-label" for="status">Status</label>
            <select id="status" name="status" required class="form-select">
                <option value="draft" @selected(old('status')==='draft')>Draft</option>
                <option value="published" @selected(old('status')==='published')>Published</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-save">Save Post</button>
            <a class="btn-back" href="/admin/posts">Back</a>
        </div>
    </form>
@endsection
