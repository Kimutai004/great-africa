<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>@yield('title', 'Great Africa NGO') </title>
  <meta name="description" content="Generational Resilience Environment Agriculture Transdevelopment Africa — Great Africa. Sustainable agriculture, climate-smart innovation, conservation, and community-led development in Kenya and Africa." />

  <meta property="og:type" content="website" />
  <meta property="og:title" content="@yield('title', 'Great Africa NGO')" />
  <meta property="og:description" content="Building climate-smart futures through sustainable agriculture, youth and women empowerment, and environmental conservation." />
  <meta property="og:image" content="/images/placeholder-og.jpg" />

  <link rel="preconnect" href="https://fonts.bunny.net" />
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <header class="site-header" role="banner">
    <div class="container">
      <div class="navbar" aria-label="Primary navigation">
        <a class="brand" href="/" aria-label="Great Africa home">
          <div class="brand-mark" aria-hidden="true">GA</div>
          <div class="brand-title">
            <strong>Great Africa</strong>
            <span>Generational Resilience • Kenya & Africa</span>
          </div>
        </a>

        <button class="mobile-toggle" type="button" id="mobileToggle" aria-expanded="false" aria-controls="mobileDrawer">
          <span aria-hidden="true">☰</span>
          <span class="sr-only" style="position:absolute;left:-9999px">Open menu</span>
        </button>

        <nav class="nav-links" role="navigation" aria-label="Main">
          <a href="/about">About Us</a>
          <a href="/programs">Programs / Projects</a>

          <a href="/impact">Impact / Stories</a>
          <a href="/events">Events</a>
          <a href="/blog">Blog / News</a>
          <a href="/get-involved">Get Involved</a>
          <a href="/contact">Contact</a>
        </nav>



        <div class="header-ctas">
          <a class="btn btn-secondary" href="/get-involved" aria-label="Volunteer with Great Africa">Volunteer</a>
          <a class="btn btn-primary" href="/donate" aria-label="Donate to Great Africa">Donate</a>
        </div>
      </div>

      <div class="drawer" id="mobileDrawer" role="navigation" aria-label="Mobile">
        <div class="drawer-panel">
          <div class="drawer-links">
            <a href="/about">About</a>
            <a href="/programs">Programs</a>
            <a href="/impact">Impact</a>
            <a href="/events">Events</a>
            <a href="/blog">News</a>
            <a href="/contact">Contact</a>
            <a href="/get-involved">Volunteer</a>
            <a href="/donate">Donate</a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main id="main" class="container" tabindex="-1" style="padding-top: 18px;">
    @yield('content')
  </main>

  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="footer-grid">
        <div>
          <div style="font-weight:900;color:var(--brand-900);font-size:16px;">Great Africa</div>
          <div class="small" style="margin-top:8px;">Sustainable agriculture, climate-smart innovation, conservation, and community development in Kenya and Africa.</div>
        </div>
        <div>
          <div style="font-weight:900;color:var(--brand-900);">Quick links</div>
          <div style="display:grid;gap:8px;margin-top:10px;">
            <a href="/programs">Programs / Projects</a>
            <a href="/get-involved">Get Involved</a>
            <a href="/impact">Impact / Stories</a>
            <a href="/events">Events</a>
          </div>
        </div>
        <div>
          <div style="font-weight:900;color:var(--brand-900);">Contact</div>
          <div class="small" style="margin-top:10px;">
            <div><strong>Email:</strong> hello@example.org</div>
            <div><strong>Phone:</strong> +254 700 000 000</div>
            <div><strong>Location:</strong> Nairobi, Kenya</div>
          </div>
        </div>
      </div>
      <hr class="sep" />
      <div class="small" style="display:flex;justify-content:space-between;gap:10px;flex-wrap:wrap;">
        <div>© {{ date('Y') }} Great Africa. All rights reserved.</div>
        <div style="display:flex;gap:14px;align-items:center;">
          <a href="#" aria-label="Facebook">Facebook</a>
          <a href="#" aria-label="Instagram">Instagram</a>
          <a href="#" aria-label="X">X</a>
          <a href="#" aria-label="YouTube">YouTube</a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    (function(){
      const toggle=document.getElementById('mobileToggle');
      const drawer=document.getElementById('mobileDrawer');
      if(!toggle||!drawer) return;

      toggle.addEventListener('click', ()=>{
        const open = drawer.classList.toggle('open');
        toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      });

      // close drawer on link click
      drawer.querySelectorAll('a').forEach(a=>{
        a.addEventListener('click', ()=>{
          drawer.classList.remove('open');
          toggle.setAttribute('aria-expanded','false');
        });
      });
    })();
  </script>
</body>
</html>

