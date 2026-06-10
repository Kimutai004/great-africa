@extends('admin.layouts.app')

@section('title','Admin - Contact Messages')

@section('content')
    <h1 style="margin:0 0 14px;">Contact Messages</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Topic</th>
                <th>Message</th>
                <th>Created</th>
                <th style="width:160px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->topic ?? '—' }}</td>
                    <td style="max-width:420px;">{{ $message->message }}</td>
                    <td class="muted">{{ $message->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <form action="/admin/contact-messages/{{ $message->id }}" method="POST" onsubmit="return confirm('Delete this message?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-ghost" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div style="margin-top:14px;">{{ $messages->links() }}</div>
@endsection

