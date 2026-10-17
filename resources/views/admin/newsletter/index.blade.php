@extends('admin.layouts.app')

@section('title', 'Admin - Newsletter Subscribers')

@section('content')
    <div class="admin-topbar">
        <div>
            <h1 style="margin:0 0 6px;">Newsletter Subscribers</h1>
            <div class="crumb">Inbox</div>
        </div>
    </div>

    <div class="table-wrap">
        <div class="admin-card" style="padding:0; overflow:hidden;">
            <table>
        <thead>
            <tr>
                <th>Email</th>
                <th>Subscribed</th>
                <th style="width:160px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($subscribers as $subscriber)
                <tr>
                    <td>{{ $subscriber->email }}</td>
                    <td class="muted">{{ ($subscriber->subscribed_at ?? $subscriber->created_at ?? now())->format('Y-m-d H:i') }}</td>
                    <td>
                        <form action="{{ route('admin.newsletter.destroy', $subscriber) }}" method="POST" onsubmit="return confirm('Remove this subscriber?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-ghost" type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="muted" style="text-align:center; padding:2rem;">No subscribers yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table></div></div>

    <div style="margin-top:14px;">{{ $subscribers->links() }}</div>
@endsection
