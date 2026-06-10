@extends('admin.layouts.app')

@section('title','Admin - Posts')

@section('content')
    <div class="admin-topbar">
        <div>
            <h1 style="margin:0 0 6px;">News / Blog Posts</h1>
            <div class="crumb">Drafts + published</div>
        </div>
        <a class="btn btn-primary" href="/admin/posts/create" style="padding:10px 14px;border-radius:12px;text-decoration:none;font-weight:700;">
            + Create Post
        </a>
    </div>

    <div class="table-wrap">
        <div class="admin-card" style="padding:0; overflow:hidden;">
            <table>
                <thead>
                    <tr>
                        <th style="width:38%;">Title</th>
                        <th>Category</th>
                        <th style="width:140px;">Published</th>
                        <th style="width:110px;">Status</th>
                        <th style="width:220px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($posts as $post)
                    <tr>
                        <td><strong>{{ $post->title }}</strong></td>
                        <td>{{ $post->category ?? '—' }}</td>
                        <td>{{ $post->published_at ? $post->published_at->format('Y-m-d') : '—' }}</td>
                        <td><small>{{ $post->status }}</small></td>
                        <td>
                            <div class="admin-actions" style="margin-top:0;">
                                <a class="btn btn-ghost" href="/admin/posts/{{ $post->id }}/edit" style="padding:10px 12px;border-radius:12px;">
                                    Edit
                                </a>
                                <form action="/admin/posts/{{ $post->id }}" method="POST" onsubmit="return confirm('Delete this post?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-ghost" type="submit" style="padding:10px 12px;border-radius:12px;">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <div style="padding:14px; color:rgba(255,255,255,.68);">
                                No posts found.
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div style="margin-top:14px;">
        {{ $posts->links() }}
    </div>
@endsection


