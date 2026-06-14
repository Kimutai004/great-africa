@extends('admin.layouts.app')

@section('title','Admin - Volunteer Requests')

@section('content')
    <div class="admin-topbar">
        <div>
            <h1 style="margin:0 0 6px;">Volunteer Requests</h1>
            <div class="crumb">Inbox</div>
        </div>
    </div>

    <div class="table-wrap">
        <div class="admin-card" style="padding:0; overflow:hidden;">
            <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Location</th>
                <th>Interest</th>
                <th>Message</th>
                <th>Created</th>
                <th style="width:160px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $request)
                <tr>
                    <td>{{ $request->name }}</td>
                    <td>{{ $request->email }}</td>
                    <td>{{ $request->location ?? '—' }}</td>
                    <td>{{ $request->interest ?? '—' }}</td>
                    <td style="max-width:420px;">
    {{ \Illuminate\Support\Str::limit($request->message, 100) }}
    <button type="button" class="btn btn-ghost view-message" data-message="{{ $request->message }}" data-delete-url="/admin/volunteer-requests/{{ $request->id }}">View</button>
</td>
                    <td class="muted">{{ $request->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <form action="/admin/volunteer-requests/{{ $request->id }}" method="POST" onsubmit="return confirm('Delete this request?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-ghost" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table></div></div>

    <div style="margin-top:14px;">{{ $requests->links() }}</div>
@endsection

