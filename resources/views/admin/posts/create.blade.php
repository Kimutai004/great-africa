@extends('admin.layouts.app')

@section('title','Admin - Create Post')

@section('content')
    <div class="admin-topbar">
        <div>
            <h1 style="margin:0 0 6px;">Create Post</h1>
            <div class="crumb">Add a news/blog post and publish when ready</div>
        </div>
    </div>

    <form action="/admin/posts" method="POST" enctype="multipart/form-data" style="display:grid; gap:12px;">

        @csrf

        <div class="admin-card" style="padding:14px;">
            <label><strong>Title</strong></label>
            <input name="title" required value="{{ old('title') }}" style="width:100%;padding:12px;border-radius:12px;border:1px solid rgba(255,255,255,.18);background:rgba(255,255,255,.03);color:inherit;outline:none;"/>
        </div>

        <div class="admin-card" style="padding:14px;">
            <label><strong>Category</strong></label>
            <input name="category" value="{{ old('category') }}" placeholder="News / Insight / Story" style="width:100%;padding:12px;border-radius:12px;border:1px solid rgba(255,255,255,.18);background:rgba(255,255,255,.03);color:inherit;outline:none;"/>
        </div>

        <div class="admin-card" style="padding:14px;">
            <label><strong>Excerpt</strong></label>
            <textarea name="excerpt" rows="3" style="width:100%;padding:12px;border-radius:12px;border:1px solid rgba(255,255,255,.18);background:rgba(255,255,255,.03);color:inherit;outline:none;">{{ old('excerpt') }}</textarea>
        </div>

        <div class="admin-card" style="padding:14px;">
            <label><strong>Body</strong></label>
            <textarea name="body" rows="7" style="width:100%;padding:12px;border-radius:12px;border:1px solid rgba(255,255,255,.18);background:rgba(255,255,255,.03);color:inherit;outline:none;">{{ old('body') }}</textarea>
        </div>

        <div class="admin-card" style="padding:14px;">
            <label><strong>Upload Image (optional)</strong></label>
            <input class="form-control" type="file" name="image" accept="image/*" style="width:100%;padding:10px 0;"/>
            <div style="margin-top:8px; color:rgba(16,185,129,.95); font-weight:800; font-size:12px;">
                Accepted: JPG/PNG/WebP. This will be uploaded and shown on the blog.
            </div>
        </div>


        <div class="admin-card" style="padding:14px;">
            <label><strong>Status</strong></label>
            <select name="status" required style="width:100%;padding:12px;border-radius:12px;border:1px solid rgba(255,255,255,.18);background:rgba(255,255,255,.03);color:inherit;outline:none;">
                <option value="draft" @selected(old('status')==='draft')>Draft</option>
                <option value="published" @selected(old('status')==='published')>Published</option>
            </select>
        </div>

        <div class="admin-actions">
            <button class="btn btn-primary" type="submit" style="padding:10px 14px;border-radius:12px; font-weight:800;">Save</button>
            <a class="btn btn-ghost" href="/admin/posts" style="padding:10px 14px;border-radius:12px;text-decoration:none;">Back</a>
        </div>
    </form>
@endsection


