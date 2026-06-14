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
            --admin-muted: rgba(231, 236, 253, .72);
            --admin-card: rgba(255,255,255,.05);
            --admin-border: rgba(99, 102, 241, .22);
            --admin-accent:#6366f1;
            --admin-accent2:#22c55e;
        }




        html,body{height:100%;}
        body{
            margin:0;
            font-family: "Inter", sans-serif;
            background:
            radial-gradient(1000px 520px at 12% 0%, rgba(99,102,241,.20), transparent 60%),
                radial-gradient(900px 520px at 92% 10%, rgba(34,197,94,.14), transparent 58%),
                linear-gradient(180deg, #070a18, #0b1020);

            color:var(--admin-ink);
        }

        .auth-shell{
            min-height:50vh;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:24px;
        }

        .auth-card{
            width:100%;
            max-width:520px;
            background:var(--admin-card);
            border:1px solid var(--admin-border);
            border-radius:20px;
            padding:22px;
            box-shadow: 0 20px 50px rgba(0,0,0,.35);
            backdrop-filter: blur(14px);
        }

        .auth-brand{
            display:flex;
            align-items:center;
            gap:12px;
            margin-bottom:14px;
        }

        .auth-logo{
            width:54px;
            height:54px;
            border-radius:14px;
            display:grid;
            place-items:center;
            font-weight:900;
        }

        .auth-brand strong{display:block; line-height:1.1;}
        .auth-brand span{display:block; font-size:11px; color:var(--admin-muted); margin-top:2px;}

        .auth-title{margin:0 0 6px; font-size:18px;}
        .auth-sub{margin:0 0 16px; color:var(--admin-muted); font-size:12px;}

        .field{margin-top:12px;}

        .input{
            width:100%;
            padding:12px 14px;
            border-radius:14px;
            border:1px solid rgba(255,255,255,.18);
            background:rgba(255,255,255,.03);
            color:inherit;
            outline:none;
        }
        .input:focus{border-color:rgba(61, 123, 70, 0.55); box-shadow: 0 0 0 4px rgba(99,102,241,.18);}


        .btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:10px;
            padding:12px 16px;
            border-radius:14px;
            border:1px solid transparent;
            font-weight:800;
            cursor:pointer;
            text-decoration:none;
        }

        .btn-primary{background:linear-gradient(135deg, rgba(62, 123, 89, 0.95), rgba(64, 132, 83, 0.85)); color:white;}

        .btn-primary:hover{filter: brightness(1.06);} 

        .btn-ghost{background:transparent; border-color: rgba(255,255,255,.18); color:var(--admin-text);}
        .btn-ghost:hover{background:rgba(255,255,255,.06);} 

        .error-card{
            margin-top:14px;
            padding:12px 14px;
            border-radius:14px;
            border:1px solid rgba(239,68,68,.45);
            background:rgba(239,68,68,.08);
            color:rgba(255,255,255,.92);
        }


        @media (max-width: 420px){
            .auth-card{padding:18px;}
        }
    </style>
</head>
<body>
    <div class="auth-shell">
        
            @yield('content')
    </div>
</body>
</html>

