@extends('admin.layouts.app')

@section('title','Dashboard')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>Dashboard</h1>
            <div class="crumb">Overview of your content and quick actions</div>
        </div>
        <div class="admin-topbar-right">
            <a href="/admin/events/create" class="btn-save">+ Create Event</a>
            <a href="/admin/posts/create" class="btn-save">+ Create Post</a>
        </div>
    </div>

    <div style="margin-bottom:24px; display:grid; grid-template-columns:repeat(auto-fit,minmax(220px,1fr)); gap:16px;">
        <div class="admin-card" style="padding:20px; border:1px solid var(--admin-border); border-radius:12px; background:#fff;">
            <div style="display:flex; align-items:center; justify-content:space-between;">
                <div>
                    <div style="font-size:12px; text-transform:uppercase; letter-spacing:0.08em; font-weight:800; color:#6b7280;">Events</div>
                    <div style="font-size:32px; font-weight:800; color:#111827;">{{ $eventsCount ?? 0 }}</div>
                </div>
                <div style="width:48px; height:48px; border-radius:12px; background:rgba(15, 83, 60, 0.10); display:flex; align-items:center; justify-content:center; color:#0F533C; font-size:20px;">ðŸ“…</div>
            </div>
        </div>
        <div class="admin-card" style="padding:20px; border:1px solid var(--admin-border); border-radius:12px; background:#fff;">
            <div style="display:flex; align-items:center; justify-content:space-between;">
                <div>
                    <div style="font-size:12px; text-transform:uppercase; letter-spacing:0.08em; font-weight:800; color:#6b7280;">News / Posts</div>
                    <div style="font-size:32px; font-weight:800; color:#111827;">{{ $postsCount ?? 0 }}</div>
                </div>
                <div style="width:48px; height:48px; border-radius:12px; background:rgba(15, 83, 60, 0.10); display:flex; align-items:center; justify-content:center; color:#0F533C; font-size:20px;">ðŸ“°</div>
            </div>
        </div>
        <div class="admin-card" style="padding:20px; border:1px solid var(--admin-border); border-radius:12px; background:#fff;">
            <div style="display:flex; align-items:center; justify-content:space-between;">
                <div>
                    <div style="font-size:12px; text-transform:uppercase; letter-spacing:0.08em; font-weight:800; color:#6b7280;">Contact Messages</div>
                    <div style="font-size:32px; font-weight:800; color:#111827;">{{ $messagesCount ?? 0 }}</div>
                </div>
                <div style="width:48px; height:48px; border-radius:12px; background:rgba(15, 83, 60, 0.10); display:flex; align-items:center; justify-content:center; color:#0F533C; font-size:20px;">âœ‰ï¸</div>
            </div>
        </div>
        <div class="admin-card" style="padding:20px; border:1px solid var(--admin-border); border-radius:12px; background:#fff;">
            <div style="display:flex; align-items:center; justify-content:space-between;">
                <div>
                    <div style="font-size:12px; text-transform:uppercase; letter-spacing:0.08em; font-weight:800; color:#6b7280;">Volunteer Requests</div>
                    <div style="font-size:32px; font-weight:800; color:#111827;">{{ $requestsCount ?? 0 }}</div>
                </div>
                <div style="width:48px; height:48px; border-radius:12px; background:rgba(15, 83, 60, 0.10); display:flex; align-items:center; justify-content:center; color:#0F533C; font-size:20px;">ðŸ™‹</div>
            </div>
        </div>
    </div>

    <div class="admin-card" style="border:1px solid var(--admin-border); border-radius:12px; background:#fff;">
        <div style="padding:20px; border-bottom:1px solid var(--admin-border-soft);">
            <h2 style="margin:0; font-size:16px; font-weight:800; color:#111827; text-transform:uppercase; letter-spacing:0.08em;">Quick Actions</h2>
        </div>
        <div style="padding:20px; display:grid; grid-template-columns:repeat(auto-fit,minmax(200px,1fr)); gap:12px;">
            <a href="/admin/events" class="btn-back" style="padding:14px; border:1px solid var(--admin-border); border-radius:10px; text-align:center; display:block;">View All Events</a>
            <a href="/admin/posts" class="btn-back" style="padding:14px; border:1px solid var(--admin-border); border-radius:10px; text-align:center; display:block;">View All Posts</a>
            <a href="/admin/contact-messages" class="btn-back" style="padding:14px; border:1px solid var(--admin-border); border-radius:10px; text-align:center; display:block;">View Contact Messages</a>
            <a href="/admin/volunteer-requests" class="btn-back" style="padding:14px; border:1px solid var(--admin-border); border-radius:10px; text-align:center; display:block;">View Volunteer Requests</a>
            <a href="/admin/newsletter" class="btn-back" style="padding:14px; border:1px solid var(--admin-border); border-radius:10px; text-align:center; display:block;">View Newsletter</a>
        </div>
    </div>
@endsection
