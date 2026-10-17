@extends('admin.layouts.app')

@section('title','Admin - Posts')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>News / Blog Posts</h1>
            <div class="crumb">Drafts and published posts</div>
        </div>
        <div class="admin-topbar-right">
            <a href="/admin/posts/create" class="btn-save">+ Create Post</a>
        </div>
    </div>

    <div class="admin-toolbar">
        <div class="admin-search">
            <input type="text" name="search" placeholder="Search posts…" value="{{ request('search') }}" />
        </div>
        <select class="admin-filter-select" name="status">
            <option value="">All statuses</option>
            <option value="published" @if(request('status')==='published') selected @endif>Published</option>
            <option value="draft" @if(request('status')==='draft') selected @endif>Draft</option>
        </select>
    </div>

    @if($posts->count() > 0)
    <div class="admin-bulk">
        <select name="bulk_action" id="bulk_action">
            <option value="">Bulk action</option>
            <option value="publish">Publish selected</option>
            <option value="draft">Set to draft</option>
            <option value="delete">Delete selected</option>
        </select>
        <button class="admin-bulk-btn" onclick="document.getElementById('bulk_form').submit()">Apply</button>
        <button class="admin-bulk-btn danger" onclick="if(confirm('Delete selected posts?')){ document.getElementById('bulk_action').value='delete'; document.getElementById('bulk_form').submit(); }">Delete</button>
    </div>

    <form id="bulk_form" action="/admin/posts/bulk" method="POST" style="display:none;">
        @csrf
        @foreach($posts as $post)
            <input type="checkbox" name="selected[]" value="{{ $post->id }}" style="display:none;">
        @endforeach
    </form>

    <div class="table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width:40px;"><input type="checkbox" id="select_all" /></th>
                    <th>Title</th>
                    <th style="width:140px;">Category</th>
                    <th style="width:140px;">Published</th>
                    <th style="width:110px;">Status</th>
                    <th style="width:180px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td><input type="checkbox" name="selected[]" value="{{ $post->id }}" /></td>
                    <td>
                        <strong>{{ $post->title }}</strong>
                        <div class="muted">#{{ $post->id }}</div>
                    </td>
                    <td>{{ $post->category ?? '—' }}</td>
                    <td>{{ $post->published_at ? $post->published_at->format('Y-m-d') : '—' }}</td>
                    <td>
                        <span class="badge {{ $post->status === 'published' ? 'badge-published' : 'badge-draft' }}">
                            {{ ucfirst($post->status) }}
                        </span>
                    </td>
                    <td>
                        <div class="admin-actions">
                            <a href="/admin/posts/{{ $post->id }}/edit" class="btn-ghost">Edit</a>
                            <form action="/admin/posts/{{ $post->id }}" method="POST" onsubmit="return confirm('Delete this post?');" style="margin:0;display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="margin-top:14px;">{{ $posts->links() }}</div>

@else
    <div class="admin-empty">
        <h3>No posts yet</h3>
        <p style="margin-top:6px;">Create your first post to get started.</p>
        <a href="/admin/posts/create" class="btn-save" style="margin-top:16px; display:inline-block;">+ Create Post</a>
    </div>
@endif
@endsection
