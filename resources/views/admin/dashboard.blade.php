@extends('admin.layouts.app')

@section('title','Dashboard')

@section('content')
    <h1 style="margin:0 0 16px;">Dashboard</h1>

    <div class="admin-grid-cards" style="margin-bottom:16px;">
        <div class="admin-card admin-stat">
            <div class="label">Events</div>
            <div class="value">{{ $eventsCount ?? 0 }}</div>
        </div>
        <div class="admin-card admin-stat">
            <div class="label">News / Posts</div>
            <div class="value">{{ $postsCount ?? 0 }}</div>
        </div>
        <div class="admin-card admin-stat">
            <div class="label">Contact Messages</div>
            <div class="value">{{ $messagesCount ?? 0 }}</div>
        </div>
        <div class="admin-card admin-stat">
            <div class="label">Volunteer Requests</div>
            <div class="value">{{ $requestsCount ?? 0 }}</div>
        </div>
    </div>

    <div class="admin-card" style="padding:16px;">
        <div style="display:flex; align-items:center; justify-content:space-between; gap:12px; flex-wrap:wrap;">
            <div>
                <h2 style="margin:0 0 6px; font-size:18px;">Quick actions</h2>
                <div style="color:rgba(255,255,255,.68); font-size:13px;">Create new content and review inbox submissions.</div>
            </div>
            <div class="admin-actions">
                <a class="btn btn-primary" href="/admin/events/create" style="padding:10px 14px; border-radius:12px; font-weight:700; text-decoration:none;">
                    + Create Event
                </a>
                <a class="btn btn-primary" href="/admin/posts/create" style="padding:10px 14px; border-radius:12px; font-weight:700; text-decoration:none;">
                    + Create Post
                </a>
                <a class="btn btn-ghost" href="/admin/contact-messages" style="padding:10px 14px; border-radius:12px; border:1px solid rgba(255,255,255,.18); color:rgba(255,255,255,.92); text-decoration:none;">
                    Inbox (Contact)
                </a>
                <a class="btn btn-ghost" href="/admin/volunteer-requests" style="padding:10px 14px; border-radius:12px; border:1px solid rgba(255,255,255,.18); color:rgba(255,255,255,.92); text-decoration:none;">
                    Inbox (Volunteers)
                </a>
            </div>
        </div>
    </div>
@endsection

