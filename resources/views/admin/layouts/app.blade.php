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

        <aside class="admin-sidebar">
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
                <a href="/admin" class="{{ request()->is('admin') ? 'active' : '' }}">Dashboard</a>
                <a href="/admin/events" class="{{ request()->is('admin/events*') ? 'active' : '' }}">Events</a>
                <a href="/admin/posts" class="{{ request()->is('admin/posts*') ? 'active' : '' }}">News / Blog</a>
                <a href="/admin/contact-messages" class="{{ request()->is('admin/contact-messages*') ? 'active' : '' }}">Contact Messages</a>
                <a href="/admin/volunteer-requests" class="{{ request()->is('admin/volunteer-requests*') ? 'active' : '' }}">Get Involved</a>
                <a href="/admin/newsletter" class="{{ request()->is('admin/newsletter*') ? 'active' : '' }}">Newsletter</a>
            </nav>

            <div class="admin-bottom">
                @auth
                    <form action="/logout" method="POST" class="admin-logout-form">
                        @csrf
                        <button type="submit" class="admin-logout-btn">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="/admin/login" class="admin-login-btn">Login</a>
                @endguest
            </div>
        </aside>

        <main class="admin-content">

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

            <div class="admin-card">
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

