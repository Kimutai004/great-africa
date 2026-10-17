@extends('admin.layouts.auth')

@section('title','Admin Login')

@section('content')
    <div class="auth-login-panel">
        <div class="auth-login-card">
            <div class="auth-login-brand">
                <div class="auth-login-logo">
                    <img src="/images/logo.png" alt="Great Africa Logo" />
                </div>
                <div>
                    <strong>Great Africa</strong>
                    <span>Admin Panel</span>
                </div>
            </div>

            <h1 class="auth-login-title">Admin Login</h1>
            <p class="auth-login-sub">Sign in to manage events, news, and inbox submissions.</p>

            <form action="/admin/login" method="POST" class="auth-login-form">
                @csrf

                <div class="auth-login-field">
                    <label class="auth-login-label" for="email">Email address</label>
                    <input id="email" name="email" type="email" required value="{{ old('email') }}" class="auth-login-input" placeholder="you@greatafrica.org" />
                </div>

                <div class="auth-login-field">
                    <label class="auth-login-label" for="password">Password</label>
                    <input id="password" name="password" type="password" required class="auth-login-input" placeholder="••••••••" />
                </div>

                <button type="submit" class="auth-login-btn">Sign in</button>

                @if ($errors->any())
                    <div class="auth-login-error">
                        <strong>Fix the following:</strong>
                        <ul style="margin:6px 0 0; padding-left:18px; font-size:13px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('error'))
                    <div class="auth-login-error">{{ session('error') }}</div>
                @endif
            </form>
        </div>
    </div>
@endsection


