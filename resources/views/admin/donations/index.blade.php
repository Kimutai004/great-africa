@extends('admin.layouts.app')

@section('title','Admin - Donations')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>Donations</h1>
            <div class="crumb">Pledges and confirmed gifts</div>
        </div>
    </div>

    <div class="admin-stat-grid" style="grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));">
        <div class="admin-stat-card">
            <div class="admin-stat-info">
                <div class="admin-stat-label">Confirmed (KES)</div>
                <div class="admin-stat-value">{{ number_format($totalRaised, 0) }}</div>
            </div>
            <div class="admin-stat-icon">&#10003;</div>
        </div>
        <div class="admin-stat-card">
            <div class="admin-stat-info">
                <div class="admin-stat-label">Pledged (KES)</div>
                <div class="admin-stat-value">{{ number_format($totalPledged, 0) }}</div>
            </div>
            <div class="admin-stat-icon">&#9203;</div>
        </div>
        <div class="admin-stat-card">
            <div class="admin-stat-info">
                <div class="admin-stat-label">Donors</div>
                <div class="admin-stat-value">{{ $donorCount }}</div>
            </div>
            <div class="admin-stat-icon">&#128105;</div>
        </div>
    </div>

    <form method="GET" action="{{ route('admin.donations.index') }}" class="admin-toolbar">
        <div class="admin-search">
            <input type="text" name="search" placeholder="Search name, email, purpose…" value="{{ request('search') }}" />
        </div>
        <select class="admin-filter-select" name="status" onchange="this.form.submit()">
            <option value="">All statuses</option>
            <option value="pledged" @if(request('status')==='pledged') selected @endif>Pledged</option>
            <option value="confirmed" @if(request('status')==='confirmed') selected @endif>Confirmed</option>
            <option value="cancelled" @if(request('status')==='cancelled') selected @endif>Cancelled</option>
        </select>
        @if(request('search'))
            <a href="{{ route('admin.donations.index') }}" class="btn-ghost">Clear</a>
        @endif
    </form>

    @if($donations->count() > 0)
    <div class="table-wrap">
        <table class="admin-table">
            <thead>
                <tr>
                    <th>Donor</th>
                    <th style="width:130px;">Amount</th>
                    <th style="width:150px;">Purpose</th>
                    <th style="width:110px;">Status</th>
                    <th style="width:140px;">Date</th>
                    <th style="width:240px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($donations as $donation)
                <tr>
                    <td>
                        <strong>{{ $donation->name }}</strong>
                        <div class="muted">{{ $donation->email }}</div>
                    </td>
                    <td><strong>KES {{ number_format($donation->amount, 0) }}</strong></td>
                    <td>{{ $donation->purpose ?? '—' }}</td>
                    <td>
                        <span class="badge {{ $donation->status === 'confirmed' ? 'badge-published' : 'badge-draft' }}">
                            {{ ucfirst($donation->status) }}
                        </span>
                    </td>
                    <td class="muted">{{ $donation->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <div class="admin-actions">
                            <form action="{{ route('admin.donations.status', $donation) }}" method="POST" style="margin:0;display:inline;">
                                @csrf @method('PATCH')
                                <input type="hidden" name="status" value="confirmed" />
                                <button type="submit" class="btn-ghost" @if($donation->status==='confirmed') disabled @endif>Confirm</button>
                            </form>
                            <form action="{{ route('admin.donations.destroy', $donation) }}" method="POST" onsubmit="return confirm('Remove this donation record?');" style="margin:0;display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn-danger">Remove</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="margin-top:14px;">{{ $donations->links() }}</div>

    @else
    <div class="admin-empty">
        <h3>No donations yet</h3>
        <p style="margin-top:6px;">Pledges from the donate page will appear here.</p>
    </div>
    @endif
@endsection
