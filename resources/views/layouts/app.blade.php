<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title', 'Great Africa — Climate Resilience & Sustainable Agriculture in Kenya')</title>

    <meta name="description" content="@yield('meta_description', 'Great Africa builds climate resilience and sustainable livelihoods through climate-smart agriculture, conservation, and youth &amp; women empowerment across Kenya and Africa.')" />
    <meta name="theme-color" content="#16181c" />

    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Great Africa" />
    <meta property="og:title" content="@yield('title', 'Great Africa')" />
    <meta property="og:description" content="@yield('meta_description', 'Building climate-smart futures through sustainable agriculture, conservation, and community empowerment.')" />
    <meta property="og:image" content="{{ asset('images/hero-1.jpg') }}" />
    <meta name="twitter:card" content="summary_large_image" />

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}" />

    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin />
    <link
        href="https://fonts.bunny.net/css?family=archivo:600,700,800|inter:400,500,600,700"
        rel="stylesheet"
    />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "NGO",
        "name": "Great Africa",
        "alternateName": "Generational Resilience Environment Agriculture Transdevelopment Africa",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo.png') }}",
        "description": "Climate-smart agriculture, environmental conservation, and youth & women empowerment across Kenya and Africa.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Nairobi",
            "addressCountry": "KE"
        },
        "email": "{{ config('site.email') }}",
        "telephone": "{{ config('site.phone') }}"
    }
    </script>

    @yield('head')
</head>

<body>

    <a class="skip-link" href="#main">Skip to content</a>

    <!-- ================= HEADER ================= -->
    <header class="site-header">
        <div class="container header-inner">

            <a class="brand" href="/" aria-label="Great Africa — home">
                <span class="brand-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="" width="42" height="42" />
                </span>
                <span>
                    <span class="brand-name">Great Africa</span>
                    <span class="brand-tag">Climate Resilience · Kenya</span>
                </span>
            </a>

            @php
                $nav = [
                    '/about'      => 'About',
                    '/programs'   => 'Programs',
                    '/impact'     => 'Impact',
                    '/events'     => 'Events',
                    '/blog'       => 'News',
                    '/get-involved' => 'Get Involved',
                    '/contact'    => 'Contact',
                ];
            @endphp

            <nav class="main-nav" aria-label="Main navigation">
                @foreach ($nav as $path => $label)
                    <a href="{{ $path }}" @if(request()->is(ltrim($path, '/'))) class="is-active" @endif>{{ $label }}</a>
                @endforeach
            </nav>

            <div class="header-ctas">
                <a class="btn btn-sm" href="/get-involved">Volunteer</a>
                <a class="btn btn-green btn-sm" href="/donate">Donate</a>
            </div>

            <button
                class="nav-toggle"
                id="navToggle"
                type="button"
                aria-label="Open menu"
                aria-controls="mobileDrawer"
                aria-expanded="false"
            ><span></span></button>

        </div>
    </header>

    <!-- ================= MOBILE DRAWER ================= -->
    <div class="drawer" id="mobileDrawer" role="dialog" aria-modal="true" aria-label="Site menu">
        <div class="drawer-panel">

            <div class="drawer-top">
                <span class="brand-name">Menu</span>
                <button class="drawer-close" type="button" aria-label="Close menu">✕</button>
            </div>

            <nav class="drawer-nav" aria-label="Mobile navigation">
                @foreach ($nav as $path => $label)
                    <a href="{{ $path }}" @if(request()->is(ltrim($path, '/'))) class="is-active" @endif>{{ $label }}</a>
                @endforeach
            </nav>

            <div class="drawer-ctas">
                <a class="btn btn-invert" href="/donate">Donate</a>
                <a class="btn btn-line-invert" href="/get-involved">Volunteer</a>
            </div>

            <div class="drawer-meta">
                <span>{{ config('site.email') }}</span>
                <span>{{ config('site.phone') }}</span>
                <span>{{ config('site.location') }}</span>
            </div>

        </div>
    </div>

    <!-- ================= MAIN ================= -->
    <main id="main">
        @yield('content')
    </main>

    <!-- ================= FOOTER ================= -->
    <footer class="site-footer">
        <div class="container">

            <div class="footer-grid">

                <div class="footer-brand">
                    <span class="brand-name">Great Africa</span>
                    <p class="footer-blurb">
                        Generational Resilience Environment Agriculture
                        Transdevelopment Africa. Community-led climate resilience,
                        sustainable agriculture, and conservation across Kenya
                        and Africa.
                    </p>
                    <p class="footer-blurb" style="margin-top:1.25rem;">
                        <a class="link-arrow" href="/get-involved">Join the work →</a>
                    </p>
                </div>

                <div>
                    <h4 class="footer-title">Organisation</h4>
                    <nav class="footer-links" aria-label="Organisation links">
                        <a href="/about">About us</a>
                        <a href="/programs">Programs</a>
                        <a href="/impact">Impact</a>
                        <a href="/events">Events</a>
                        <a href="/blog">News</a>
                    </nav>
                </div>

                <div>
                    <h4 class="footer-title">Take action</h4>
                    <nav class="footer-links" aria-label="Action links">
                        <a href="/donate">Donate</a>
                        <a href="/get-involved">Volunteer</a>
                        <a href="/contact">Partner with us</a>
                        <a href="/contact">Contact</a>
                    </nav>
                </div>

                <div>
                    <h4 class="footer-title">Contact</h4>
                    <address class="footer-contact" style="font-style:normal;">
                        <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>
                        <a href="tel:{{ config('site.phone_href') }}">{{ config('site.phone') }}</a>
                        <span>{{ config('site.location') }}</span>
                    </address>
                </div>

            </div>

            <div class="footer-bottom">

                <div>
                    © {{ date('Y') }} Great Africa (GREAT Africa). All rights reserved.
                </div>

                <nav class="social-links" aria-label="Social media">
                    @foreach (config('site.social') as $network => $url)
                        <a href="{{ $url }}" rel="noreferrer" target="_blank">{{ ucfirst($network === 'x' ? 'X' : $network) }}</a>
                    @endforeach
                </nav>

                <nav class="footer-links" aria-label="Legal" style="display:flex; gap:1.25rem;">
                    <a href="/privacy" style="font-size:0.8rem;">Privacy</a>
                    <a href="/terms" style="font-size:0.8rem;">Terms</a>
                </nav>

            </div>

        </div>
    </footer>

    @yield('scripts')

</body>
</html>

