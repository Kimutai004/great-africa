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
                    <span>Admin Panel &nbsp;·&nbsp; Est. Kenya</span>
                </div>
            </div>

            <h1 class="auth-login-title">Welcome back</h1>
            <p class="auth-login-sub">Sign in to manage events, news, blog posts, and inbox submissions.</p>

            <form action="/admin/login" method="POST" class="auth-login-form">
                @csrf

                @if ($errors->any())
                    <div class="auth-login-error">
                        <strong>Please fix the following:</strong>
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

                <div class="auth-login-field">
                    <label class="auth-login-label" for="email">Email address</label>
                    <input id="email" name="email" type="email" required value="{{ old('email') }}" class="auth-login-input" placeholder="you@greatafrica.org" />
                </div>

                <div class="auth-login-field">
                    <label class="auth-login-label" for="password">Password</label>
                    <input id="password" name="password" type="password" required class="auth-login-input" placeholder="••••••••" />
                </div>

                <div class="auth-login-actions">
                    <label class="auth-login-remember">
                        <input type="checkbox" name="remember" />
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="auth-login-forgot">Forgot password?</a>
                </div>

                <button type="submit" class="auth-login-btn">Sign in</button>

                <div class="auth-login-divider"><span>or continue with</span></div>

                <div class="auth-login-social">
                    <button type="button" class="auth-login-social-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h-9.38c-.13-.72-.24-1.48-.24-2.25 0-1.52.98-2.89 2.44-3.51 1.18-.51 2.56-.84 4.18-.84 3.25 0 4.87 2.21 4.87 4.39v1.75h2.96c.59 0 1.09-.45 1.09-1s0-.51-1.09-1h-2.96v-1.75c0-1.21-.55-2.2-1.47-2.99-.92-.78-2.3-.95-3.95-.95-2.75 0-3.98 1.84-3.98 3.85 0 .83.14 1.63.32 2.38H2.88v-2.25c0-3.52 1.98-5.54 5.18-5.54 1.42 0 2.64.64 3.42 1.49.79.85 1.24 2.05 1.24 3.59v2.07h-1.48c-.49 0-.89.4-.89.89s.4.89.89.89h2.96v2.25z"/></svg>
                        Google
                    </button>
                </div>

                <div class="auth-login-footer">
                    Don't have an account? <a href="/admin/register">Get access</a>
                </div>
            </form>
        </div>
    </div>
@endsection


