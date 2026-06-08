<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title', 'Great Africa NGO')</title>

    <meta
        name="description"
        content="Generational Resilience Environment Agriculture Transdevelopment Africa — Great Africa."
    />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title', 'Great Africa NGO')" />
    <meta
        property="og:description"
        content="Building climate-smart futures through sustainable agriculture and environmental conservation."
    />

    <meta property="og:image" content="/images/placeholder-og.jpg" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
        href="https://fonts.bunny.net/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

    <!-- Skip Link -->
    <a class="skip-link" href="#main">
        Skip to content
    </a>

    <!-- =======================================================
         HEADER
    ======================================================== -->
    <header class="site-header">

        <div class="container">

            <div class="navbar">

                <!-- BRAND -->
                <a class="brand" href="/" aria-label="Great Africa Home">

                    <div class="brand-mark">
                        GA
                    </div>

                    <div class="brand-title">
                        <strong>Great Africa</strong>
                        <span>
                            Climate Resilience • Kenya & Africa
                        </span>
                    </div>

                </a>

                <!-- NAVIGATION -->
                <nav class="nav-links" aria-label="Main Navigation">

                    <a href="/about">
                        About
                    </a>

                    <a href="/programs">
                        Programs
                    </a>

                    <a href="/impact">
                        Impact
                    </a>

                    <a href="/events">
                        Events
                    </a>

                    <a href="/blog">
                        News
                    </a>

                    <a href="/get-involved">
                        Get Involved
                    </a>

                    <a href="/contact">
                        Contact
                    </a>

                </nav>

                <!-- CTA -->
                <div class="header-ctas">

                    <a
                        class="btn btn-secondary"
                        href="/get-involved"
                    >
                        Volunteer
                    </a>

                    <a
                        class="btn btn-primary"
                        href="/donate"
                    >
                        Donate
                    </a>

                </div>

                <!-- MOBILE TOGGLE -->
                <button
                    class="mobile-toggle"
                    id="mobileToggle"
                    type="button"
                    aria-expanded="false"
                    aria-controls="mobileDrawer"
                >
                    ☰
                </button>

            </div>

        </div>

    </header>

    <!-- =======================================================
         MOBILE DRAWER
    ======================================================== -->
    <div
        class="drawer"
        id="mobileDrawer"
    >

        <div class="drawer-panel">

            <div class="drawer-links">

                <a href="/about">About</a>
                <a href="/programs">Programs</a>
                <a href="/impact">Impact</a>
                <a href="/events">Events</a>
                <a href="/blog">News</a>
                <a href="/get-involved">Volunteer</a>
                <a href="/contact">Contact</a>
                <a href="/donate">Donate</a>

            </div>

        </div>

    </div>

    <!-- =======================================================
         MAIN CONTENT
    ======================================================== -->
    <main id="main">

        @yield('content')

    </main>

    <!-- =======================================================
         FOOTER
    ======================================================== -->
    <footer class="footer">

        <div class="container">

            <div class="footer-grid">

                <!-- ABOUT -->
                <div>

                    <div class="footer-brand">
                        Great Africa
                    </div>

                    <p class="footer-text">
                        Sustainable agriculture, climate-smart innovation,
                        environmental conservation, and community-led
                        development across Kenya and Africa.
                    </p>

                </div>

                <!-- QUICK LINKS -->
                <div>

                    <h4 class="footer-title">
                        Quick Links
                    </h4>

                    <div class="footer-links">

                        <a href="/programs">
                            Programs
                        </a>

                        <a href="/impact">
                            Impact Stories
                        </a>

                        <a href="/events">
                            Events
                        </a>

                        <a href="/blog">
                            News & Updates
                        </a>

                    </div>

                </div>

                <!-- CONTACT -->
                <div>

                    <h4 class="footer-title">
                        Contact
                    </h4>

                    <div class="footer-contact">

                        <div>
                            hello@example.org
                        </div>

                        <div>
                            +254 700 000 000
                        </div>

                        <div>
                            Nairobi, Kenya
                        </div>

                    </div>

                </div>

            </div>

            <hr class="sep">

            <!-- BOTTOM -->
            <div class="footer-bottom">

                <div>
                    © {{ date('Y') }} Great Africa.
                    All rights reserved.
                </div>

                <div class="social-links">

                    <a href="#">
                        Facebook
                    </a>

                    <a href="#">
                        Instagram
                    </a>

                    <a href="#">
                        X
                    </a>

                    <a href="#">
                        YouTube
                    </a>

                </div>

            </div>

        </div>

    </footer>

    <!-- =======================================================
         MOBILE MENU SCRIPT
    ======================================================== -->
    <script>

        (function () {

            const toggle = document.getElementById('mobileToggle');
            const drawer = document.getElementById('mobileDrawer');
            if (!toggle || !drawer) return;

            const links = drawer.querySelectorAll('a');
            let lastFocused = null;

            const openDrawer = () => {
                lastFocused = document.activeElement;
                drawer.classList.add('open');
                toggle.setAttribute('aria-expanded', 'true');
                document.body.style.overflow = 'hidden';

                const firstLink = links[0];
                if (firstLink) firstLink.focus();
            };

            const closeDrawer = () => {
                drawer.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
                document.body.style.overflow = '';

                if (lastFocused && typeof lastFocused.focus === 'function') {
                    lastFocused.focus();
                }
            };

            toggle.addEventListener('click', () => {
                const isOpen = drawer.classList.contains('open');
                if (isOpen) closeDrawer();
                else openDrawer();
            });

            links.forEach(link => {
                link.addEventListener('click', () => closeDrawer());
            });

            // Click outside drawer panel closes it
            drawer.addEventListener('click', (e) => {
                if (e.target === drawer) closeDrawer();
            });

            document.addEventListener('keydown', (e) => {
                if (!drawer.classList.contains('open')) return;
                if (e.key === 'Escape') closeDrawer();
            });
        })();

    </script>


</body>
</html>
