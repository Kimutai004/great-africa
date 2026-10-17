@extends('admin.layouts.app')

@section('title', 'Admin - Newsletter Subscribers')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>Newsletter Subscribers</h1>
            <div class="crumb">Mailing list</div>
        </div>
    </div>

    <div class="admin-toolbar">
        <div class="admin-search">
            <input type="text" name="search" placeholder="Search subscribers…" value="{{ request('search') }}" />
        </div>
    </div>

    @if($subscribers->count() > 0)
    <div class="admin-bulk">
        <select name="bulk_action" id="bulk_action">
            <option value="">Bulk action</option>
            <option value="delete">Remove selected</option>
        </select>
        <button class="admin-bulk-btn" onclick="document.getElementById('bulk_form').submit()">Apply</button>
        <button class="admin-bulk-btn danger" onclick="if(confirm('Remove selected subscribers?')){ document.getElementById('bulk_action').value='delete'; document.getElementById('bulk_form').submit(); }">Remove</button>
    </div>

    <form action="{{ route('admin.newsletter.bulk') }}" method="POST" style="display:none;">
        @csrf
        @foreach($subscribers as $subscriber)
            <input type="checkbox" name="selected[]" value="{{ $subscriber->id }}" style="display:none;">
        @endforeach
    </form>

    <div class="table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th style="width:40px;"><input type="checkbox" id="select_all" /></th>
                    <th>Email</th>
                    <th style="width:160px;">Subscribed</th>
                    <th style="width:180px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subscribers as $subscriber)
                <tr>
                    <td><input type="checkbox" name="selected[]" value="{{ $subscriber->id }}" /></td>
                    <td>{{ $subscriber->email }}</td>
                    <td class="muted">{{ ($subscriber->subscribed_at ?? $subscriber->created_at ?? now())->format('Y-m-d H:i') }}</td>
                    <td>
                        <form action="{{ route('admin.newsletter.destroy', $subscriber) }}" method="POST" onsubmit="return confirm('Remove this subscriber?');" style="margin:0;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn-danger">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="margin-top:14px;">{{ $subscribers->links() }}</div>

@else
    <div class="admin-empty">
        <h3>No subscribers yet</h3>
        <p style="margin-top:6px;">Newsletter subscribers will appear here.</p>
    </div>
@endsection
