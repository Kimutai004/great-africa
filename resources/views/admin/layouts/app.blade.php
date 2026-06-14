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
    background: rgba(0,0,0,.6);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 1000;
  }
  .modal.show { display: flex; }
  .modal-content {
    background: var(--admin-bg);
    color: var(--admin-ink);
    border: 1px solid var(--admin-border);
    border-radius: var(--radius-lg);
    max-width: 90%;
    max-height: 80%;
    overflow-y: auto;
    padding: 1.5rem;
  }
  .modal-close {
    background: var(--admin-accent);
    color: #fff;
    border: none;
    border-radius: var(--radius-sm);
    padding: .5rem 1rem;
    cursor: pointer;
    margin-top: 1rem;
  }
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
                </div>
            </div>

            <nav class="admin-nav" aria-label="Admin navigation">
                <a href="/admin" class="{{ request()->is('admin') ? 'active' : '' }}">Dashboard</a>
                <a href="/admin/events" class="{{ request()->is('admin/events*') ? 'active' : '' }}">Events</a>
                <a href="/admin/posts" class="{{ request()->is('admin/posts*') ? 'active' : '' }}">News / Blog</a>
                <a href="/admin/contact-messages" class="{{ request()->is('admin/contact-messages*') ? 'active' : '' }}">Contact Messages</a>
                <a href="/admin/volunteer-requests" class="{{ request()->is('admin/volunteer-requests*') ? 'active' : '' }}">Get Involved</a>
            </nav>

            <div class="admin-bottom">
                @auth
                    <form action="/logout" method="POST" style="display:flex; gap:10px;">
                        @csrf
                        <button class="btn btn-ghost" type="submit" style="width:100%;">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="/admin/login" class="btn btn-primary" style="width:100%; text-align:center;">Login</a>
                @endguest
            </div>
        </aside>

        <main class="admin-content">

            @if (session('error'))
                <div class="admin-flash">
                    <div class="flash-card">{{ session('error') }}</div>
                </div>
            @endif
            @if (session('success'))
                <div class="admin-flash">
                    <div class="flash-card">{{ session('success') }}</div>
                </div>
            @endif

            <div class="admin-card">
                @yield('content')
            </div>
        </main>

<div id="message-modal" class="modal">
  <div class="modal-content">
    <h3>Message Details</h3>
    <p id="modal-message-content"></p>
    <form id="modal-delete-form" method="POST" style="display:none;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-ghost">Delete</button>
</form>
<button type="button" class="modal-close btn btn-primary">Close</button>
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
    if (e.target.dataset.deleteUrl) {
  const deleteForm = document.getElementById('modal-delete-form');
  deleteForm.action = e.target.dataset.deleteUrl;
  deleteForm.style.display = 'inline-block';
} else {
  const deleteForm = document.getElementById('modal-delete-form');
  deleteForm.style.display = 'none';
}
modal.style.display = 'flex';
  }
  if (e.target && e.target.matches('.modal-close')) {
    document.getElementById('message-modal').style.display = 'none';
  }
});
</script>
</body>
</html>

