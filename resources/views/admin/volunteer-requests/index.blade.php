@extends('admin.layouts.app')

@section('title','Admin - Volunteer Requests')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>Volunteer Requests</h1>
            <div class="crumb">Inbox submissions</div>
        </div>
    </div>

    <div class="admin-toolbar">
        <div class="admin-search">
            <input type="text" name="search" placeholder="Search requests…" value="{{ request('search') }}" />
        </div>
    </div>

    @if($requests->count() > 0)
    <div class="admin-bulk">
        <select name="bulk_action" id="bulk_action">
            <option value="">Bulk action</option>
            <option value="delete">Delete selected</option>
        </select>
        <button class="admin-bulk-btn" onclick="document.getElementById('bulk_form').submit()">Apply</button>
        <button class="admin-bulk-btn danger" onclick="if(confirm('Delete selected requests?')){ document.getElementById('bulk_action').value='delete'; document.getElementById('bulk_form').submit(); }">Delete</button>
    </div>

    <form id="bulk_form" action="/admin/volunteer-requests/bulk" method="POST" style="display:none;">
        @csrf
        @foreach($requests as $request)
            <input type="checkbox" name="selected[]" value="{{ $request->id }}" style="display:none;">
        @endforeach
    </form>

    <div class="table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width:40px;"><input type="checkbox" id="select_all" /></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th style="width:140px;">Location</th>
                    <th style="width:140px;">Interest</th>
                    <th style="width:260px;">Message</th>
                    <th style="width:140px;">Created</th>
                    <th style="width:180px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($requests as $request)
                <tr>
                    <td><input type="checkbox" name="selected[]" value="{{ $request->id }}" /></td>
                    <td>
                        <strong>{{ $request->name }}</strong>
                        <div class="muted">#{{ $request->id }}</div>
                    </td>
                    <td>{{ $request->email }}</td>
                    <td>{{ $request->location ?? '—' }}</td>
                    <td>{{ $request->interest ?? '—' }}</td>
                    <td style="max-width:260px;">
                        {{ \Illuminate\Support\Str::limit($request->message, 100) }}
                        <button type="button" class="btn-ghost view-message" data-message="{{ $request->message }}" data-delete-url="/admin/volunteer-requests/{{ $request->id }}">View</button>
                    </td>
                    <td class="muted">{{ $request->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <form action="/admin/volunteer-requests/{{ $request->id }}" method="POST" onsubmit="return confirm('Delete this request?');" style="margin:0;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="margin-top:14px;">{{ $requests->links() }}</div>

@else
    <div class="admin-empty">
        <h3>No volunteer requests</h3>
        <p style="margin-top:6px;">Volunteer submissions will appear here.</p>
    </div>
@endif
@endsection
