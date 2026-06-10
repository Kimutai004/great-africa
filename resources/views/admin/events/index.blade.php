@extends('admin.layouts.app')

@section('title','Admin - Events')

@section('content')
    <div class="admin-topbar">
        <div>
            <h1 style="margin:0 0 6px;">Events</h1>
            <div class="crumb">Drafts + published events</div>
        </div>
        <a class="btn btn-primary" href="/admin/events/create" style="padding:10px 14px;border-radius:12px;text-decoration:none;font-weight:700;">
            + Create Event
        </a>
    </div>

    <div class="table-wrap">
        <div class="admin-card" style="padding:0; overflow:hidden;">
            <table>
                <thead>
                    <tr>
                        <th style="width:34%;">Title</th>
                        <th>Location</th>
                        <th style="width:140px;">Start</th>
                        <th style="width:110px;">Status</th>
                        <th style="width:220px;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @forelse($events as $event)
                    <tr>
                        <td><strong>{{ $event->title }}</strong></td>
                        <td>{{ $event->location ?? '—' }}</td>
                        <td>{{ $event->start_date ? $event->start_date->format('Y-m-d') : '—' }}</td>
                        <td><small>{{ $event->status }}</small></td>
                        <td>
                            <div class="admin-actions" style="margin-top:0;">
                                <a class="btn btn-ghost" href="/admin/events/{{ $event->id }}/edit" style="padding:10px 12px;border-radius:12px;">
                                    Edit
                                </a>
                                <form action="/admin/events/{{ $event->id }}" method="POST" onsubmit="return confirm('Delete this event?');">
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
                                No events found.
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div style="margin-top:14px;">
        {{ $events->links() }}
    </div>
@endsection


