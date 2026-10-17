@extends('admin.layouts.app')

@section('title','Admin - Events')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>Events</h1>
            <div class="crumb">Manage upcoming and past events</div>
        </div>
        <div class="admin-topbar-right">
            <a href="/admin/events/create" class="btn-save">+ Create Event</a>
        </div>
    </div>

    <div class="admin-toolbar">
        <div class="admin-search">
            <input type="text" name="search" placeholder="Search events…" value="{{ request('search') }}" />
        </div>
        <select class="admin-filter-select" name="status">
            <option value="">All statuses</option>
            <option value="published" @if(request('status')==='published') selected @endif>Published</option>
            <option value="draft" @if(request('status')==='draft') selected @endif>Draft</option>
        </select>
    </div>

    @if($events->count() > 0)
        <div class="admin-bulk">
            <select name="bulk_action" id="bulk_action">
                <option value="">Bulk action</option>
                <option value="publish">Publish selected</option>
                <option value="draft">Set to draft</option>
                <option value="delete">Delete selected</option>
            </select>
            <button class="admin-bulk-btn" onclick="document.getElementById('bulk_form').submit()">Apply</button>
            <button class="admin-bulk-btn danger" onclick="if(confirm('Delete selected events?')){ document.getElementById('bulk_action').value='delete'; document.getElementById('bulk_form').submit(); }">Delete</button>
        </div>

        <form id="bulk_form" action="/admin/events/bulk" method="POST" style="display:none;">
            @csrf
            @foreach($events as $event)
                <input type="checkbox" name="selected[]" value="{{ $event->id }}" style="display:none;">
            @endforeach
        </form>

    <div class="table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width:40px;"><input type="checkbox" id="select_all" /></th>
                    <th>Title</th>
                    <th style="width:140px;">Location</th>
                    <th style="width:140px;">Start Date</th>
                    <th style="width:110px;">Status</th>
                    <th style="width:200px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                <tr>
                    <td><input type="checkbox" name="selected[]" value="{{ $event->id }}" /></td>
                    <td>
                        <strong>{{ $event->title }}</strong>
                        <div class="muted">#{{ $event->id }}</div>
                    </td>
                    <td>{{ $event->location ?? '—' }}</td>
                    <td>{{ $event->start_date ? $event->start_date->format('M d, Y') : '—' }}</td>
                    <td>
                        <span class="badge {{ $event->status === 'published' ? 'badge-published' : 'badge-draft' }}">
                            {{ ucfirst($event->status) }}
                        </span>
                    </td>
                    <td>
                        <div class="admin-actions">
                            <a href="/admin/events/{{ $event->id }}/edit" class="btn-ghost">Edit</a>
                            <form action="/admin/events/{{ $event->id }}" method="POST" onsubmit="return confirm('Delete this event?');" style="margin:0;display:inline;">
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

    <div style="margin-top:14px;">{{ $events->links() }}</div>

@else
    <div class="admin-empty">
        <h3>No events yet</h3>
        <p style="margin-top:6px;">Create your first event to get started.</p>
        <a href="/admin/events/create" class="btn-save" style="margin-top:16px; display:inline-block;">+ Create Event</a>
    </div>
@endsection
