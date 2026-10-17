@extends('admin.layouts.app')

@section('title','Dashboard')

@section('content')
    <h1 style="margin:0 0 0px;">Dashboard</h1>
    <div style="color:rgba(0, 0, 0, 0.68); font-size:14px; margin-bottom:16px;">Overview of your content and quick actions.</div>

    <div class="admin-grid-cards" style="margin-bottom:16px;">
        <div class="admin-card admin-stat">
            <div class="label">Events</div>
            <div class="value">{{ $eventsCount ?? 0 }}</div>
        </div>
        <div class="admin-card admin-stat">
            <div class="label">News / Posts</div>
            <div class="value">{{ $postsCount ?? 0 }}</div>
        </div>
        <div class="admin-card admin-stat">
            <div class="label">Contact Messages</div>
            <div class="value">{{ $messagesCount ?? 0 }}</div>
        </div>
        <div class="admin-card admin-stat">
            <div class="label">Volunteer Requests</div>
            <div class="value">{{ $requestsCount ?? 0 }}</div>
        </div>
    </div>
    
    <!--Statistics-->
    <div class="admin-card" style="margin-top:16px;">
        <h2 style="margin-top:0; margin-bottom:6px;">Statistics Overview</h2>
        <p style="color:var(--admin-muted); margin-top:0; font-size:13px;">
            Totals for events, posts, contact messages and volunteer requests.
        </p>

        <div class="admin-grid-cards" style="grid-template-columns:repeat(auto-fit,minmax(250px,1fr)); gap:14px; margin-top:14px;">
            <div class="admin-card" style="box-shadow:none; background:rgba(255,255,255,.03);">
                <div style="display:flex; align-items:center; justify-content:space-between; gap:2px;">
                    <div>
                        <div class="label">Events</div>
                        <div class="value" style="font-size:28px;">{{ $eventsCount ?? 0 }}</div>
                    </div>
                    <div style="min-width:80px;">
                        <canvas id="eventsPie" height="110"></canvas>
                    </div>
                </div>
            </div>

            <div class="admin-card" style="box-shadow:none; background:rgba(255,255,255,.03);">
                <div style="display:flex; align-items:center; justify-content:space-between; gap:12px;">
                    <div>
                        <div class="label">Engagement (Posts)</div>
                        <div class="value" style="font-size:28px;">{{ $postsCount ?? 0 }}</div>
                    </div>
                    <div style="min-width:80px;">
                        <canvas id="postsPie" height="50"></canvas>
                    </div>
                </div>
            </div>

            <div class="admin-card" style="box-shadow:none; background:rgba(255,255,255,.03);">
                <div style="display:flex; align-items:center; justify-content:space-between; gap:12px;">
                    <div>
                        <div class="label">Contact Messages</div>
                        <div class="value" style="font-size:28px;">{{ $messagesCount ?? 0 }}</div>
                    </div>
                    <div style="min-width:80px;">
                        <canvas id="messagesPie" height="110"></canvas>
                    </div>
                </div>
            </div>

            <div class="admin-card" style="box-shadow:none; background:rgba(255,255,255,.03);">
                <div style="display:flex; align-items:center; gap:12px;">
                    <div>
                        <div class="label">Volunteer Requests</div>
                        <div class="value" style="font-size:28px;">{{ $requestsCount ?? 0 }}</div>
                    </div>
                    <div style="min-width:80px;">
                        <canvas id="requestsPie" height="110"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-top:18px;">
            <div class="label" style="margin-bottom:8px;">Total mix (pie)</div>
            <div style="display:flex; flex-wrap:wrap; gap:14px; align-items:center;">
                <div style="flex:1; min-width:260px; max-width:300px;">
                    <canvas id="totalsPie" height="100"></canvas>
                </div>
                <div style="flex:1; min-width:240px;">
                    <div class="admin-actions" style="gap:10px; margin-top:0;">
                        <span class="badge" style="display:inline-flex; align-items:center; gap:8px; padding:8px 10px; border-radius:999px; background:rgba(99,102,241,.12); border:1px solid rgba(99,102,241,.25); color:var(--admin-ink); font-weight:800;">
                            <span style="width:10px; height:10px; border-radius:50%; background:rgba(99,102,241,1); display:inline-block;"></span> Events
                        </span>
                        <span class="badge" style="display:inline-flex; align-items:center; gap:8px; padding:8px 10px; border-radius:999px; background:rgba(34,197,94,.12); border:1px solid rgba(34,197,94,.25); color:var(--admin-ink); font-weight:800;">
                            <span style="width:10px; height:10px; border-radius:50%; background:rgba(34,197,94,1); display:inline-block;"></span> Posts
                        </span>
                        <span class="badge" style="display:inline-flex; align-items:center; gap:8px; padding:8px 10px; border-radius:999px; background:rgba(56,189,248,.12); border:1px solid rgba(56,189,248,.25); color:var(--admin-ink); font-weight:800;">
                            <span style="width:10px; height:10px; border-radius:50%; background:rgba(56,189,248,1); display:inline-block;"></span> Messages
                        </span>
                        <span class="badge" style="display:inline-flex; align-items:center; gap:8px; padding:8px 10px; border-radius:999px; background:rgba(245,158,11,.12); border:1px solid rgba(245,158,11,.25); color:var(--admin-ink); font-weight:800;">
                            <span style="width:10px; height:10px; border-radius:50%; background:rgba(245,158,11,1); display:inline-block;"></span> Requests
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Chart.js (lightweight) --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script>
        const totals = {
            events: {{ (int) ($eventsCount ?? 0) }},
            posts: {{ (int) ($postsCount ?? 0) }},
            messages: {{ (int) ($messagesCount ?? 0) }},
            requests: {{ (int) ($requestsCount ?? 0) }},
        };

        const totalSum = totals.events + totals.posts + totals.messages + totals.requests;

        function pie(canvasId, value, baseColor) {
            const c = document.getElementById(canvasId);
            if (!c) return;
            const other = Math.max(0, totalSum - value);
            new Chart(c, {
                type: 'doughnut',
                data: {
                    labels: ['Value', 'Other'],
                    datasets: [{
                        data: [value, other],
                        backgroundColor: [baseColor, 'rgba(148, 163, 184, .18)'],
                        borderColor: 'rgba(0,0,0,0)',
                        hoverOffset: 2
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            callbacks: {
                                label: function(ctx) {
                                    const v = ctx.parsed;
                                    const label = ctx.label || '';
                                    return label + ': ' + v;
                                }
                            }
                        }
                    },
                    cutout: '70%'
                }
            });
        }

        function totalsPie(canvasId) {
            const c = document.getElementById(canvasId);
            if (!c) return;

            const labels = ['Events', 'Posts', 'Messages', 'Requests'];
            const values = [totals.events, totals.posts, totals.messages, totals.requests];
            const colors = [
                'rgba(99, 102, 241, 1)',
                'rgba(34, 197, 94, 1)',
                'rgba(56, 189, 248, 1)',
                'rgba(245, 158, 11, 1)'
            ];

            new Chart(c, {
                type: 'pie',
                data: {
                    labels,
                    datasets: [{
                        data: values,
                        backgroundColor: colors,
                        borderColor: 'rgba(0,0,0,0)'
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            labels: {
                                color: getComputedStyle(document.body).color,
                                usePointStyle: true,
                                boxWidth: 8
                            }
                        }
                    }
                }
            });
        }

        pie('eventsPie', totals.events, 'rgba(99, 102, 241, 1)');
        pie('postsPie', totals.posts, 'rgba(34, 197, 94, 1)');
        pie('messagesPie', totals.messages, 'rgba(56, 189, 248, 1)');
        pie('requestsPie', totals.requests, 'rgba(245, 158, 11, 1)');
        totalsPie('totalsPie');
    </script>

@endsection



