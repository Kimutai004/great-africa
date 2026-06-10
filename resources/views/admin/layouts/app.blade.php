<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title', 'Admin') | Great Africa</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <style>
        :root{
            --admin-ink:#0f172a;
            --admin-muted:#475569;
            --admin-card:#ffffffcc;
            --admin-border:rgba(16,185,129,.18);
            --admin-border-2:rgba(15,23,42,.10);
            --admin-shadow: 0 18px 50px rgba(15,23,42,.12);
            --admin-bg1:#ffffff;
            --admin-bg2:#eafff5;
            --admin-green:#16a34a;
            --admin-green-2:#0ea5a5;
            --admin-accent:#16a34a;
            --admin-accent2:#0ea5a5;
            --radius-xl:20px;
            --radius-lg:16px;
            --radius-md:14px;
        }

        html,body{height:100%;}

        body{
            margin:0;
            font-family:"Inter", ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            background:
                radial-gradient(1000px 520px at 12% 0%, rgba(16,185,129,.20), transparent 60%),
                radial-gradient(900px 520px at 92% 10%, rgba(14,165,233,.14), transparent 58%),
                linear-gradient(180deg, var(--admin-bg1), var(--admin-bg2));
            color:var(--admin-ink);
        }

        .admin-shell{display:flex; min-height:100vh;}

        .admin-sidebar{
            width:270px;
            padding:18px 14px;
            position:sticky; top:0; align-self:flex-start; height:100vh;
            background: rgba(255,255,255,.58);
            backdrop-filter: blur(14px);
            border-right:1px solid rgba(16,185,129,.18);
        }

        .admin-brand{
            display:flex; align-items:center; gap:12px;
            padding:12px 12px;
            border:1px solid var(--admin-border);
            border-radius:16px;
            background: rgba(255,255,255,.72);
            box-shadow: 0 10px 30px rgba(15,23,42,.08);
            margin-bottom:14px;
        }
        .admin-brand .logo{
            width:42px; height:42px; border-radius:14px;
            background:linear-gradient(135deg, rgba(22,163,74,.95), rgba(14,165,233,.85));
            display:flex;align-items:center;justify-content:center;
            color:white; font-weight:900;
            box-shadow: 0 16px 40px rgba(22,163,74,.25);
        }
        .admin-brand strong{display:block; line-height:1.1; font-size:14px;}
        .admin-brand span{display:block; font-size:12px; color:var(--admin-muted); margin-top:2px;}

        .admin-nav{display:flex; flex-direction:column; gap:8px; margin-top:12px;}
        .admin-nav a{
            text-decoration:none;
            color:var(--admin-ink);
            padding:11px 12px;
            border-radius:14px;
            border:1px solid transparent;
            background:transparent;
            font-weight:850;
            transition: .18s ease;
            display:block;
        }
        .admin-nav a:hover{
            background:rgba(16,185,129,.10);
            border-color:rgba(16,185,129,.28);
            transform: translateY(-1px);
            box-shadow: 0 10px 24px rgba(16,185,129,.10);
        }

        .admin-nav a:focus-visible{
            outline: none;
            box-shadow: 0 0 0 4px rgba(16,185,129,.18);
        }


        .admin-sidebar .admin-bottom{position:absolute; left:14px; right:14px; bottom:16px;}

        .admin-content{flex:1; padding:22px;}

        .admin-card{overflow:hidden;}


        .admin-topbar{
            display:flex; align-items:flex-start; justify-content:space-between; gap:14px;
            margin-bottom:16px;
        }
        .admin-topbar h1{font-size:24px; margin:0; font-weight:900;}
        .admin-topbar .crumb{color:var(--admin-muted); font-size:13px; margin-top:6px; font-weight:600;}

        .admin-flash{display:grid; gap:10px; margin-bottom:16px;}
        .flash-card{
            padding:12px 14px; border-radius:14px;
            border:1px solid var(--admin-border-2);
            background:rgba(255,255,255,.72);
            box-shadow: 0 12px 30px rgba(15,23,42,.08);
            font-weight:700;
        }

        .admin-card{
            border:1px solid rgba(16,185,129,.22);
            border-radius:18px;
            background: rgba(255,255,255,.72);
            box-shadow: 0 18px 48px rgba(15,23,42,.12);
            backdrop-filter: blur(12px);
        }


        .admin-grid-cards{display:grid; grid-template-columns:repeat(auto-fit,minmax(210px,1fr)); gap:14px;}
        .admin-stat{padding:16px;}
        .admin-stat .label{color:var(--admin-muted); font-size:13px; font-weight:700;}
        .admin-stat .value{font-size:36px; font-weight:950; margin-top:8px; color:#0b5;
            background: linear-gradient(90deg, rgba(22,163,74,1), rgba(14,165,233,1));
            -webkit-background-clip: text; background-clip:text; color:transparent;}

        .admin-actions{display:flex; gap:10px; flex-wrap:wrap; margin-top:14px;}

        table{width:100%; border-collapse:separate; border-spacing:0;}
        th,td{
            padding:12px 10px;
            border-bottom:1px solid rgba(15,23,42,.10);
            text-align:left; vertical-align:top;
        }
        th{
            color:var(--admin-muted);
            font-weight:900;
            font-size:13px;
            letter-spacing:.2px;
        }
        tbody tr:hover td{background:rgba(16,185,129,.05);}
        td small{color:var(--admin-muted); font-weight:800;}


        .btn-ghost{
            background:transparent;
            border:1px solid rgba(15,23,42,.18);
            color:var(--admin-ink);
            font-weight:900;
            border-radius:12px;
            padding:10px 12px;
            transition: .18s ease;
        }
        .btn-ghost:hover{
            background:rgba(16,185,129,.10);
            border-color:rgba(16,185,129,.35);
            transform: translateY(-1px);
            box-shadow: 0 10px 24px rgba(16,185,129,.10);
        }
        .btn-ghost:focus-visible{
            outline:none;
            box-shadow: 0 0 0 4px rgba(16,185,129,.18);
        }


        .table-wrap{overflow:auto;}
        .table-wrap .admin-card{padding:0; overflow:hidden;}

        .admin-link{color:rgba(16,185,129,.95); font-weight:900;}
        .admin-link:hover{color:#0b5;}

        /* Improve admin content spacing inside card */
        .admin-card > .admin-topbar{padding:0;}

        @media (max-width: 900px){
            .admin-sidebar{display:none;}
            .admin-shell{display:block;}
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

