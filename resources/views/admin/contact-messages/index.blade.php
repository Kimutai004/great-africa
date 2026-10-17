@extends('admin.layouts.app')

@section('title','Admin - Contact Messages')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>Contact Messages</h1>
            <div class="crumb">Inbox submissions</div>
        </div>
    </div>

    <div class="admin-toolbar">
        <div class="admin-search">
            <input type="text" name="search" placeholder="Search messagesâ€¦" value="{{ request('search') }}" />
        </div>
    </div>

    @if($messages->count() > 0)
    <div class="admin-bulk">
        <select name="bulk_action" id="bulk_action">
            <option value="">Bulk action</option>
            <option value="delete">Delete selected</option>
        </select>
        <button class="admin-bulk-btn" onclick="document.getElementById('bulk_form').submit()">Apply</button>
        <button class="admin-bulk-btn danger" onclick="if(confirm('Delete selected messages?')){ document.getElementById('bulk_action').value='delete'; document.getElementById('bulk_form').submit(); }">Delete</button>
    </div>

    <form id="bulk_form" action="/admin/contact-messages/bulk" method="POST" style="display:none;">
        @csrf
        @foreach($messages as $message)
            <input type="checkbox" name="selected[]" value="{{ $message->id }}" style="display:none;">
        @endforeach
    </form>

    <div class="table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width:40px;"><input type="checkbox" id="select_all" /></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th style="width:140px;">Topic</th>
                    <th style="width:260px;">Message</th>
                    <th style="width:140px;">Created</th>
                    <th style="width:180px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                <tr>
                    <td><input type="checkbox" name="selected[]" value="{{ $message->id }}" /></td>
                    <td>
                        <strong>{{ $message->name }}</strong>
                        <div style="font-size:12px; color:#6b7280;">#{{ $message->id }}</div>
                    </td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->topic ?? 'â€”' }}</td>
                    <td style="max-width:260px;">
                        {{ \Illuminate\Support\Str::limit($message->message, 100) }}
                        <button type="button" class="btn-ghost view-message" data-message="{{ $message->message }}" data-delete-url="/admin/contact-messages/{{ $message->id }}" style="font-size:12px; padding:4px 8px; border:1px solid #e5e7eb; border-radius:6px; background:#fff; color:#0F533C; margin-top:4px;">View</button>
                    </td>
                    <td class="muted">{{ $message->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <form action="/admin/contact-messages/{{ $message->id }}" method="POST" onsubmit="return confirm('Delete this message?');" style="margin:0;">
                            @csrf @method('DELETE')
                            <button type="submit" style="padding:6px 12px;border-radius:8px;font-size:13px;border:1px solid #fee2e2;background:#fff;color:#dc2626;">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="margin-top:14px;">{{ $messages->links() }}</div>

@else
    <div class="admin-empty">
        <h3>No contact messages</h3>
        <p style="margin-top:6px;">Inbox submissions will appear here.</p>
    </div>
@endsection
