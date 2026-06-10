@extends('admin.layouts.auth')

@section('title','Admin Login')

@section('content')
    <div style="max-width:520px; margin:0 auto; padding:22px;">
        <div class="admin-card" style="padding:18px;">
            <h1 style="margin:0 0 10px; font-size:22px;">Admin Login</h1>
            <p style="margin:0 0 16px; color:rgba(255,255,255,.68);">Sign in to manage events, news, and inbox submissions.</p>

            <form action="/admin/login" method="POST" style="display:grid; gap:12px;">
                @csrf

                <div class="admin-card" style="padding:14px;">
                    <label for="email" style="display:block; margin-bottom:8px;"><strong>Email</strong></label>
                    <input id="email" name="email" type="email" required value="{{ old('email') }}"
                        style="width:100%;padding:12px;border-radius:12px;border:1px solid rgba(255,255,255,.18);background:rgba(255,255,255,.03);color:inherit;outline:none;" />
                </div>

                <div class="admin-card" style="padding:14px;">
                    <label for="password" style="display:block; margin-bottom:8px;"><strong>Password</strong></label>
                    <input id="password" name="password" type="password" required
                        style="width:100%;padding:12px;border-radius:12px;border:1px solid rgba(255,255,255,.18);background:rgba(255,255,255,.03);color:inherit;outline:none;" />
                </div>

                <button class="btn btn-primary" type="submit" style="justify-self:start; padding:12px 16px; border-radius:12px; font-weight:800;">
                    Login
                </button>

                @if ($errors->any())
                    <div class="admin-card" style="padding:14px; border-color:rgba(239,68,68,.5);">
                        <div style="font-weight:700; margin-bottom:6px;">Fix the following:</div>
                        <ul style="margin:0; padding-left:18px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('error'))
                    <div class="admin-card" style="padding:14px; border-color:rgba(239,68,68,.5);">
                        {{ session('error') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection


