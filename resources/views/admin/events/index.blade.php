@extends('admin.layouts.app')

@section('title','Admin - Events')

@section('content')

<style>
    .events-page {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .events-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
        padding: 26px;
        border-radius: 24px;
        background:
            linear-gradient(
                135deg,
                rgba(30, 142, 90, 0.14),
                rgba(16, 185, 129, 0.08)
            );
        border: 1px solid rgba(255,255,255,0.08);
        position: relative;
        overflow: hidden;
    }

    .events-header::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at top right,
            rgba(255,255,255,0.08),
            transparent 40%);
        pointer-events: none;
    }

    .events-title {
        position: relative;
        z-index: 1;
    }

    .events-title h1 {
        margin: 0;
        font-size: 30px;
        font-weight: 900;
        color: #fff;
        letter-spacing: -0.03em;
    }

    .events-title p {
        margin: 8px 0 0;
        color: rgba(255,255,255,0.68);
        font-size: 14px;
        font-weight: 600;
    }

    .create-btn {
        position: relative;
        z-index: 1;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 14px 18px;
        border-radius: 16px;
        text-decoration: none;
        font-weight: 800;
        color: #fff;
        background: linear-gradient(135deg, #1e8e5a, #16a34a);
        box-shadow:
            0 10px 30px rgba(30, 142, 90, 0.25),
            inset 0 1px 0 rgba(255,255,255,0.1);
        transition: all .25s ease;
    }

    .create-btn:hover {
        transform: translateY(-2px);
        box-shadow:
            0 14px 34px rgba(30, 142, 90, 0.35),
            inset 0 1px 0 rgba(255,255,255,0.1);
    }

    .events-grid {
        display: grid;
        gap: 18px;
    }

    .event-card {
        position: relative;
        padding: 22px;
        border-radius: 24px;
        background:
            linear-gradient(
                180deg,
                rgba(255,255,255,0.03),
                rgba(255,255,255,0.015)
            );
        border: 1px solid rgba(255,255,255,0.08);
        transition: all .25s ease;
        overflow: hidden;
    }

    .event-card:hover {
        transform: translateY(-3px);
        border-color: rgba(255,255,255,0.12);
        box-shadow: 0 18px 40px rgba(0,0,0,0.18);
    }

    .event-card::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(
            180deg,
            #1e8e5a,
            #16a34a
        );
    }

    .event-top {
        display: flex;
        justify-content: space-between;
        gap: 16px;
        flex-wrap: wrap;
        margin-bottom: 18px;
    }

    .event-main {
        flex: 1;
        min-width: 240px;
    }

    .event-main h3 {
        margin: 0;
        color: #fff;
        font-size: 20px;
        font-weight: 900;
        letter-spacing: -0.02em;
    }

    .event-meta {
        margin-top: 10px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .meta-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 12px;
        border-radius: 999px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.08);
        color: rgba(255,255,255,0.76);
        font-size: 12px;
        font-weight: 700;
    }

    .event-id {
        font-size: 13px;
        font-weight: 900;
        color: rgba(255,255,255,0.35);
    }

    .event-bottom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
        padding-top: 18px;
        border-top: 1px solid rgba(255,255,255,0.06);
    }

    .event-dates {
        display: flex;
        gap: 18px;
        flex-wrap: wrap;
    }

    .date-box {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .date-label {
        color: rgba(255,255,255,0.45);
        font-size: 11px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: .08em;
    }

    .date-value {
        color: #fff;
        font-size: 15px;
        font-weight: 800;
    }

    .status-pill {
        display: inline-flex;
        align-items: center;
        padding: 8px 14px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 900;
        border: 1px solid transparent;
    }

    .status-published,
    .status-active {
        background: rgba(34,197,94,.12);
        border-color: rgba(34,197,94,.22);
        color: #4ade80;
    }

    .status-draft,
    .status-pending {
        background: rgba(148,163,184,.10);
        border-color: rgba(148,163,184,.18);
        color: #cbd5e1;
    }

    .status-default {
        background: rgba(99,102,241,.12);
        border-color: rgba(99,102,241,.2);
        color: #a5b4fc;
    }

    .event-actions {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
    }

    .action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 11px 16px;
        border-radius: 14px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 800;
        transition: all .2s ease;
        border: 1px solid rgba(255,255,255,0.08);
        background: rgba(255,255,255,0.03);
        color: #fff;
        cursor: pointer;
    }

    .action-btn:hover {
        transform: translateY(-2px);
        background: rgba(255,255,255,0.06);
    }

    .action-delete:hover {
        background: rgba(239,68,68,.12);
        border-color: rgba(239,68,68,.24);
        color: #f87171;
    }

    .empty-state {
        text-align: center;
        padding: 80px 24px;
        border-radius: 24px;
        border: 1px dashed rgba(255,255,255,0.1);
        background: rgba(255,255,255,0.02);
    }

    .empty-state h3 {
        margin: 0 0 10px;
        color: #fff;
        font-size: 22px;
        font-weight: 900;
    }

    .empty-state p {
        margin: 0;
        color: rgba(255,255,255,0.58);
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .events-header {
            padding: 20px;
        }

        .event-card {
            padding: 18px;
        }

        .event-bottom {
            align-items: flex-start;
        }

        .event-actions {
            width: 100%;
        }

        .action-btn {
            flex: 1;
        }
    }
</style>

<div class="events-page">

    <div class="events-header">
        <div class="events-title">
            <h1>Events Dashboard</h1>
            <p>Manage drafts, scheduled, and published events in one place.</p>
        </div>

        <a href="/admin/events/create" class="create-btn">
            <span>＋</span>
            <span>Create Event</span>
        </a>
    </div>

    @forelse($events as $event)

        @php
            $status = strtolower((string)($event->status ?? ''));
            $statusClass = match($status) {
                'published', 'active' => 'status-published',
                'draft', 'pending' => 'status-draft',
                default => 'status-default'
            };
        @endphp

        <div class="events-grid">
            <div class="event-card">

                <div class="event-top">

                    <div class="event-main">
                        <h3>{{ $event->title }}</h3>

                        <div class="event-meta">
                            <div class="meta-pill">
                                📍 {{ $event->location ?? 'No location' }}
                            </div>

                            <div class="status-pill {{ $statusClass }}">
                                {{ ucfirst($event->status) }}
                            </div>
                        </div>
                    </div>

                    <div class="event-id">
                        #{{ $event->id }}
                    </div>

                </div>

                <div class="event-bottom">

                    <div class="event-dates">

                        <div class="date-box">
                            <span class="date-label">Start Date</span>
                            <span class="date-value">
                                {{ $event->start_date ? $event->start_date->format('M d, Y') : '—' }}
                            </span>
                        </div>

                        <div class="date-box">
                            <span class="date-label">End Date</span>
                            <span class="date-value">
                                {{ $event->end_date ? $event->end_date->format('M d, Y') : '—' }}
                            </span>
                        </div>

                    </div>

                    <div class="event-actions">

                        <a
                            href="/admin/events/{{ $event->id }}/edit"
                            class="action-btn"
                        >
                            Edit
                        </a>

                        <form
                            action="/admin/events/{{ $event->id }}"
                            method="POST"
                            onsubmit="return confirm('Delete this event?');"
                            style="margin:0;"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="action-btn action-delete"
                            >
                                Delete
                            </button>
                        </form>

                    </div>

                </div>

            </div>
        </div>

    @empty

        <div class="empty-state">
            <h3>No Events Yet</h3>
            <p>Create your first event to get started.</p>
        </div>

    @endforelse

    <div style="margin-top: 10px;">
        {{ $events->links() }}
    </div>

</div>

@endsection