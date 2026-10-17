@extends('admin.layouts.app')

@section('title','Dashboard')

@section('content')
    <div class="admin-topbar">
        <div class="admin-topbar-left">
            <h1>Dashboard</h1>
            <div class="crumb">Overview of your content and quick actions</div>
        </div>
        <div class="admin-topbar-right">
            <a href="/admin/events/create" class="btn-save">+ Create Event</a>
            <a href="/admin/posts/create" class="btn-save">+ Create Post</a>
        </div>
    </div>

    <!-- Stat Cards -->
    <div class="admin-stat-grid">
        <div class="admin-stat-card">
            <div class="admin-stat-info">
                <div class="admin-stat-label">Events</div>
                <div class="admin-stat-value">{{ $eventsCount ?? 0 }}</div>
            </div>
            <div class="admin-stat-icon">&#128197;</div>
        </div>
        <div class="admin-stat-card">
            <div class="admin-stat-info">
                <div class="admin-stat-label">News / Posts</div>
                <div class="admin-stat-value">{{ $postsCount ?? 0 }}</div>
            </div>
            <div class="admin-stat-icon">&#128221;</div>
        </div>
        <div class="admin-stat-card">
            <div class="admin-stat-info">
                <div class="admin-stat-label">Contact Messages</div>
                <div class="admin-stat-value">{{ $messagesCount ?? 0 }}</div>
            </div>
            <div class="admin-stat-icon">&#9993;</div>
        </div>
        <div class="admin-stat-card">
            <div class="admin-stat-info">
                <div class="admin-stat-label">Volunteer Requests</div>
                <div class="admin-stat-value">{{ $requestsCount ?? 0 }}</div>
            </div>
            <div class="admin-stat-icon">&#128105;</div>
        </div>
        <div class="admin-stat-card">
            <div class="admin-stat-info">
                <div class="admin-stat-label">Donations (KES)</div>
                <div class="admin-stat-value">{{ number_format($totalRaised ?? 0, 0) }}</div>
            </div>
            <div class="admin-stat-icon">&#10084;</div>
        </div>
    </div>

    <!-- Quick Actions + Recent Activity -->
    <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:24px;">

        <!-- Quick Actions -->
        <div class="admin-section">
            <div class="admin-section-head">
                <h2>Quick Actions</h2>
            </div>
            <div class="admin-section-body">
                <div class="admin-quick-grid">
                    <a href="/admin/events" class="admin-quick-item">View All Events</a>
                    <a href="/admin/posts" class="admin-quick-item">View All Posts</a>
                    <a href="/admin/contact-messages" class="admin-quick-item">View Contact Messages</a>
                    <a href="/admin/volunteer-requests" class="admin-quick-item">View Volunteer Requests</a>
                    <a href="/admin/newsletter" class="admin-quick-item">View Newsletter</a>
                    <a href="/admin/donations" class="admin-quick-item">View Donations</a>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="admin-section">
            <div class="admin-section-head">
                <h2>Recent Activity</h2>
            </div>
            <div class="admin-section-body">
                <ul class="admin-activity-list">
                    @forelse($recentActivity as $activity)
                    <li class="admin-activity-item">
                        <div class="admin-activity-icon">{!! $activity['icon'] !!}</div>
                        <div class="admin-activity-content">
                            <div class="admin-activity-title">{{ $activity['title'] }}</div>
                            <div class="admin-activity-meta">{{ $activity['meta'] }}</div>
                        </div>
                    </li>
                    @empty
                    <li class="admin-activity-item">
                        <div class="admin-activity-content">
                            <div class="admin-activity-title">No recent activity</div>
                            <div class="admin-activity-meta">Start by creating an event or post.</div>
                        </div>
                    </li>
                    @endforelse
                </ul>
            </div>
        </div>

    </div>
@endsection
