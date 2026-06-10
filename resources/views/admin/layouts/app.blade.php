<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title', 'Admin') | Great Africa</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <style>
        :root{
            --admin-bg:#0b1220;
            --admin-panel:rgba(255,255,255,.06);
            --admin-border:rgba(255,255,255,.14);
            --admin-text:rgba(255,255,255,.92);
            --admin-muted:rgba(255,255,255,.68);
            --admin-accent:#4f46e5;
            --admin-accent2:#06b6d4;
        }

        html,body{height:100%;}
        body{background:radial-gradient(1200px 700px at 20% 0%, rgba(79,70,229,.18), transparent 50%), var(--admin-bg); color:var(--admin-text);}

        .admin-shell{display:flex; min-height:100vh;}

        .admin-sidebar{
            width:260px;
            background:rgba(255,255,255,.03);
            border-right:1px solid var(--admin-border);
            padding:18px 14px;
            position:sticky; top:0; align-self:flex-start; height:100vh;
        }

        .admin-brand{
            display:flex; align-items:center; gap:10px;
            padding:10px 10px;
            border:1px solid var(--admin-border);
            border-radius:14px;
            background:rgba(255,255,255,.03);
            margin-bottom:14px;
        }
        .admin-brand .logo{
            width:36px;height:36px;border-radius:12px;
            background:linear-gradient(135deg, rgba(79,70,229,.9), rgba(6,182,212,.85));
            display:flex;align-items:center;justify-content:center;
            font-weight:900;
        }
        .admin-brand strong{display:block; line-height:1.1;}
        .admin-brand span{display:block; font-size:12px; color:var(--admin-muted); margin-top:2px;}

        .admin-nav{display:flex; flex-direction:column; gap:8px; margin-top:12px;}
        .admin-nav a{
            text-decoration:none;
            color:var(--admin-text);
            padding:10px 12px;
            border-radius:12px;
            border:1px solid transparent;
            background:transparent;
        }
        .admin-nav a:hover{background:rgba(255,255,255,.05); border-color:rgba(255,255,255,.12);}        

        .admin-sidebar .admin-bottom{position:absolute; left:14px; right:14px; bottom:16px;}

        .admin-content{flex:1; padding:22px;}

        .admin-topbar{display:flex; align-items:flex-start; justify-content:space-between; gap:14px; margin-bottom:16px;}
        .admin-topbar h1{font-size:22px; margin:0;}
        .admin-topbar .crumb{color:var(--admin-muted); font-size:13px; margin-top:6px;}

        .admin-flash{display:grid; gap:10px; margin-bottom:16px;}
        .flash-card{padding:12px 14px; border-radius:14px; border:1px solid var(--admin-border); background:rgba(255,255,255,.04);}        

        .admin-card{
            border:1px solid var(--admin-border);
            border-radius:18px;
            background:rgba(255,255,255,.04);
        }

        .admin-grid-cards{display:grid; grid-template-columns:repeat(auto-fit,minmax(210px,1fr)); gap:14px;}
        .admin-stat{padding:16px;}
        .admin-stat .label{color:var(--admin-muted); font-size:13px;}
        .admin-stat .value{font-size:34px; font-weight:900; margin-top:8px;}

        .admin-actions{display:flex; gap:10px; flex-wrap:wrap; margin-top:14px;}

        table{width:100%; border-collapse:separate; border-spacing:0;}
        th,td{padding:12px 10px; border-bottom:1px solid rgba(255,255,255,.10); text-align:left; vertical-align:top;}
        th{color:var(--admin-muted); font-weight:600; font-size:13px;}
        td small{color:var(--admin-muted);}        

        .btn-ghost{background:transparent; border:1px solid rgba(255,255,255,.18); color:var(--admin-text);}
        .btn-ghost:hover{background:rgba(255,255,255,.06);}        

        .table-wrap{overflow:auto;}
        .table-wrap .admin-card{padding:12px;}

        .admin-link{color:rgba(255,255,255,.92);}
        .admin-link:hover{color:white;}

        @media (max-width: 900px){
            .admin-sidebar{display:none;}
            .admin-content{padding:14px;}
        }
    </style>
</head>
<body>
    <div class="admin-shell">

        <aside class="admin-sidebar">
            <div class="admin-brand">
                <div class="logo">GA</div>
                <div>
                    <strong>Great Africa</strong>
                    <span>Admin Panel</span>
                </div>
            </div>

            <nav class="admin-nav" aria-label="Admin navigation">
                <a href="/admin">Dashboard</a>
                <a href="/admin/events">Events</a>
                <a href="/admin/posts">News / Blog</a>
                <a href="/admin/contact-messages">Contact Messages</a>
                <a href="/admin/volunteer-requests">Get Involved</a>
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
            <div class="admin-topbar">
                <div>
                    <h1>@yield('page_title', 'Admin')</h1>
                    <div class="crumb">Manage content & inbox submissions</div>
                </div>
            </div>

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

            <div class="admin-card" style="padding:16px;">
                @yield('content')
            </div>
        </main>

    </div>
</body>
</html>

