<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title', 'Admin') | Great Africa</title>

    @vite(['resources/css/app.css','resources/css/admin.css','resources/js/app.js'])

    <style>
        .modal {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.45);
            backdrop-filter: blur(4px);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }
        .modal.show { display: flex; }
        .modal-content {
            background: #fff;
            color: #111827;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            max-width: 90%;
            max-height: 85%;
            overflow-y: auto;
            padding: 24px;
            box-shadow: 0 24px 60px rgba(0,0,0,.25);
        }
        .modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
        }
        .modal-title {
            margin: 0;
            font-size: 18px;
            font-weight: 800;
        }
        .modal-close {
            background: #0F533C;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 8px 16px;
            cursor: pointer;
            font-weight: 700;
            font-size: 13px;
        }
        .modal-close:hover { background: #0b3f2d; }
    </style>
</head>
<body>
    <div class="admin-shell">

        <div class="admin-overlay" id="adminOverlay"></div>

        <aside class="admin-sidebar" id="adminSidebar">
            <div class="admin-brand">
                <div class="logo">
                    <img src="/images/logo.png" alt="Great Africa Logo" />
                </div>
                <div>
                    <strong>Great Africa</strong>
                    <span>Admin Panel</span>
                </div>
            </div>

            <nav class="admin-nav" aria-label="Admin navigation">
                <div class="admin-nav-label">Overview</div>
                <a href="/admin" class="{{ request()->is('admin') ? 'active' : '' }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="9" rx="1.5"/><rect x="14" y="3" width="7" height="5" rx="1.5"/><rect x="14" y="12" width="7" height="9" rx="1.5"/><rect x="3" y="16" width="7" height="5" rx="1.5"/></svg>
                    Dashboard
                </a>

                <div class="admin-nav-label">Content</div>
                <a href="/admin/events" class="{{ request()->is('admin/events*') ? 'active' : '' }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                    Events
                </a>
                <a href="/admin/posts" class="{{ request()->is('admin/posts*') ? 'active' : '' }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-4 0V9"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
                    News / Blog
                </a>

                <div class="admin-nav-label">Engagement</div>
                <a href="/admin/contact-messages" class="{{ request()->is('admin/contact-messages*') ? 'active' : '' }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H8l-4 4V6a2 2 0 0 1 2-2Z"/><path d="M8 9h8M8 13h5"/></svg>
                    Contact Messages
                </a>
                <a href="/admin/volunteer-requests" class="{{ request()->is('admin/volunteer-requests*') ? 'active' : '' }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M19 8v6M22 11h-6"/></svg>
                    Get Involved
                </a>
                <a href="/admin/newsletter" class="{{ request()->is('admin/newsletter*') ? 'active' : '' }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m2 7 10 6L22 7"/></svg>
                    Newsletter
                </a>
                <a href="/admin/donations" class="{{ request()->is('admin/donations*') ? 'active' : '' }}">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                    Donations
                </a>
            </nav>

            <div class="admin-bottom">
                @auth
                    <div class="admin-user-chip">
                        <div class="admin-user-avatar">{{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}</div>
                        <div>
                            <strong>{{ auth()->user()->name ?? 'Admin' }}</strong>
                            <span>{{ auth()->user()->email ?? '' }}</span>
                        </div>
                    </div>
                    <form action="/logout" method="POST" class="admin-logout-form">
                        @csrf
                        <button type="submit" class="admin-logout-btn">Sign out</button>
                    </form>
                @endauth
                @guest
                    <a href="/admin/login" class="admin-login-btn">Sign in</a>
                @endguest
            </div>
        </aside>

        <main class="admin-content">

            <div class="admin-topbar-bar">
                <div style="display:flex; align-items:center; gap:12px; min-width:0;">
                    <button type="button" class="admin-hamburger" id="adminHamburger" aria-label="Open menu">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                    </button>
                    <div class="page-crumb">Great Africa &nbsp;/&nbsp; <strong>@yield('title', 'Admin')</strong></div>
                </div>
                <div class="admin-topbar-actions">
                    <a href="/" target="_blank" class="admin-view-all">View site &rarr;</a>
                </div>
            </div>

            <div class="admin-body">
                @if (session('error'))
                    <div class="admin-flash admin-flash-error">
                        <div class="flash-card">{{ session('error') }}</div>
                    </div>
                @endif
                @if (session('success'))
                    <div class="admin-flash admin-flash-success">
                        <div class="flash-card">{{ session('success') }}</div>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>

<div id="message-modal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title">Message Details</h3>
        <button type="button" class="modal-close">Close</button>
    </div>
    <p id="modal-message-content"></p>
    <form id="modal-delete-form" method="POST" style="display:none;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-ghost" style="margin-top:12px;">Delete</button>
</form>
  </div>
</div>

    </div>
<script>
    document.addEventListener('click', function(e) {
        if (e.target && e.target.matches('.view-message')) {
            const message = e.target.dataset.message || '';
            const modal = document.getElementById('message-modal');
            const content = document.getElementById('modal-message-content');
            content.textContent = message;
            const deleteForm = document.getElementById('modal-delete-form');
            if (e.target.dataset.deleteUrl) {
                deleteForm.action = e.target.dataset.deleteUrl;
                deleteForm.style.display = 'block';
            } else {
                deleteForm.style.display = 'none';
            }
            modal.classList.add('show');
        }
        if (e.target && e.target.matches('.modal-close')) {
            document.getElementById('message-modal').classList.remove('show');
        }
        if (e.target && e.target.matches('.modal')) {
            e.target.classList.remove('show');
        }
    });
</script>
</body>
</html>

