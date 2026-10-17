<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title', 'Admin Login') | Great Africa</title>

    @vite(['resources/css/app.css','resources/css/admin.css','resources/js/app.js'])

    <style>
        :root{
            --admin-ink:#f7f7fb;
            --admin-muted: rgba(244, 241, 234, 0.72);
            --admin-card: #ffffff;
            --admin-border: rgba(255,255,255,.14);
            --admin-accent:#0F533C;
            --admin-accent-hover:#0b3f2d;
        }

        html,body{height:100%; margin:0;}
        body{
            font-family: "Inter", ui-sans-serif, system-ui, sans-serif;
            background:
                linear-gradient(180deg, #0F533C 0%, #0b3f2d 100%);
            color:var(--admin-ink);
        }

        .auth-shell{
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:24px;
        }

        .auth-card{
            width:100%;
            max-width:480px;
            background:var(--admin-card);
            border:1px solid var(--admin-border);
            border-radius:16px;
            padding:32px;
            box-shadow: 0 24px 60px rgba(0,0,0,.35);
            color:#111827;
        }

        .auth-brand{
            display:flex;
            align-items:center;
            gap:12px;
            margin-bottom:24px;
        }

        .auth-logo{
            width:48px;
            height:48px;
            border-radius:12px;
            display:grid;
            place-items:center;
            background:linear-gradient(135deg, #0F533C, #167a56);
            color:#fff;
            font-weight:900;
            font-size:20px;
        }

        .auth-brand strong{display:block; line-height:1.1; font-size:18px; color:#111827;}
        .auth-brand span{display:block; font-size:12px; color:#6b7280; margin-top:2px;}

        .auth-title{margin:0 0 8px; font-size:20px; font-weight:800; color:#111827;}
        .auth-sub{margin:0 0 24px; color:#6b7280; font-size:14px;}

        .field{margin-top:16px;}

        .field-label{
            display:block;
            margin-bottom:8px;
            font-size:13px;
            font-weight:700;
            color:#374151;
            text-transform:uppercase;
            letter-spacing:0.08em;
        }

        .input{
            width:100%;
            padding:12px 14px;
            border-radius:10px;
            border:1px solid #e5e7eb;
            background:#fff;
            color:#111827;
            outline:none;
            font-size:14px;
        }
        .input:focus{
            border-color:#0F533C;
            box-shadow: 0 0 0 4px rgba(15, 83, 60, 0.12);
        }

        .btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:10px;
            padding:12px 18px;
            border-radius:10px;
            border:1px solid transparent;
            font-weight:800;
            cursor:pointer;
            text-decoration:none;
            font-size:14px;
        }

        .btn-primary{
            background:#0F533C;
            color:#fff;
            width:100%;
        }

        .btn-primary:hover{
            background:#0b3f2d;
        }

        .btn-ghost{
            background:transparent;
            border-color:#e5e7eb;
            color:#374151;
            width:100%;
        }

        .btn-ghost:hover{
            background:#f3f4f6;
        }

        .error-card{
            margin-top:14px;
            padding:12px 14px;
            border-radius:10px;
            border:1px solid rgba(220, 38, 38, 0.2);
            background:rgba(220, 38, 38, 0.06);
            color:#dc2626;
            font-size:13px;
            font-weight:600;
        }

        .divider{
            display:flex;
            align-items:center;
            gap:12px;
            margin:20px 0;
            color:#9ca3af;
            font-size:12px;
            font-weight:600;
            text-transform:uppercase;
            letter-spacing:0.08em;
        }
        .divider::before,.divider::after{
            content:"";
            flex:1;
            border-bottom:1px solid #e5e7eb;
        }

        @media (max-width: 480px){
            .auth-card{padding:24px;}
        }
    </style>
</head>
<body>
    <div class="auth-shell">
        @yield('content')
    </div>
</body>
</html>
