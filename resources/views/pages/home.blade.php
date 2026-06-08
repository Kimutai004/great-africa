@extends('layouts.app')

@section('title','Great Africa NGO | Building Climate-Smart Agriculture in Kenya & Africa')

@section('content')
<section class="hero" aria-labelledby="hero-title">
    <div class="hero-wrap">

        <!-- Background Slideshow -->
        <div class="hero-slideshow" aria-hidden="true">
            <img class="hero-slide is-active" src="/images/hero 1.jpg" alt="" />
            <img class="hero-slide" src="/images/Hero 2.jpg" alt="" />
            <div class="hero-slideshow-overlay"></div>
        </div>

        @include('partials.hero-gradient')

        <div class="hero-grid">

            <!-- LEFT CONTENT -->
            <div class="hero-content">

                <div class="kicker">
                    <span class="dot"></span>
                    Climate-smart agriculture • Youth & women empowerment
                </div>

                <h1 id="hero-title">
                    Building Climate Resilience and Sustainable Livelihoods Across Africa
                </h1>

                <p class="hero-lead">
                    Great Africa (Generational Resilience Environment Agriculture
                    Transdevelopment Africa) empowers communities through
                    climate-smart agriculture, environmental conservation,
                    food security initiatives, and youth-led innovation that
                    strengthens livelihoods for generations.
                </p>

                <div class="hero-actions" role="group" aria-label="Primary calls to action">
                    <a class="btn btn-primary" href="/donate">
                        Support Our Mission
                    </a>

                    <a class="btn btn-secondary" href="/get-involved">
                        Get Involved
                    </a>

                    <a class="btn btn-ghost hero-btn-light" href="/programs">
                        Explore Programs
                    </a>
                </div>

                <div class="hero-proof">
                    <span>🌱 Community-led</span>
                    <span>🌍 Climate-focused</span>
                    <span>👩 Women & Youth Empowerment</span>
                </div>

            </div>

            <!-- RIGHT IMPACT CARD -->
            <div class="impact-card">

                <div class="impact-header">
                    Our Impact
                </div>

                <div class="impact-stats">

                    <div class="impact-item">
                        <strong>10,000+</strong>
                        <span>Farmers Reached</span>
                    </div>

                    <div class="impact-item">
                        <strong>25+</strong>
                        <span>Communities Served</span>
                    </div>

                    <div class="impact-item">
                        <strong>120+</strong>
                        <span>Youth Groups Engaged</span>
                    </div>

                    <div class="impact-item">
                        <strong>50+</strong>
                        <span>Climate Projects</span>
                    </div>

                </div>

                <div class="impact-footer">
                    Together we are creating sustainable communities and protecting natural resources for future generations.
                </div>

            </div>

        </div>
    </div>
</section>

<section class="section" aria-labelledby="programs-overview">
  <div class="split">
    <div>
      <h2 class="section-title" id="programs-overview">Key programs / projects</h2>
      <p class="section-lead">
        We focus on sustainable agriculture and natural resource management—paired with youth and women empowerment—to
        improve livelihoods and protect the environment.
      </p>
    </div>
    <div style="display:flex;gap:12px;align-items:flex-start;justify-content:flex-end;flex-wrap:wrap;">
      <span class="badge">Soil health & sustainable farming</span>
      <span class="badge">Water & watershed stewardship</span>
      <span class="badge">Conservation & restoration</span>
      <span class="badge">Food security & resilience</span>
    </div>
  </div>

  <div class="grid-3" style="margin-top:18px;">
    <div class="card">
      <h3>Climate-Smart Agriculture</h3>
      <p>Training and support for resilient farming practices that help communities adapt to changing weather.</p>
    </div>
    <div class="card">
      <h3>Environmental Conservation</h3>
      <p>Community-based approaches to protect landscapes, restore ecosystems, and manage natural resources sustainably.</p>
    </div>
    <div class="card">
      <h3>Youth & Women Empowerment</h3>
      <p>Mentorship, leadership, and skills that expand economic opportunities and strengthen community well-being.</p>
    </div>
  </div>

  <div style="margin-top:18px;display:flex;gap:12px;flex-wrap:wrap;">
    <a class="btn btn-secondary" href="/programs">View all programs</a>
    <a class="btn btn-ghost" href="/impact">See impact stories</a>
  </div>
</section>

<section class="section" aria-labelledby="impact-highlights">
  <h2 class="section-title" id="impact-highlights">Impact you can believe in</h2>
  <p class="section-lead">These are sample impact highlights—replace with your real numbers, locations, and program photos.</p>

  <div class="grid-3">
    <div class="card">
      <h3>Improved farm resilience</h3>
      <p>Communities adopt climate-smart practices to better manage drought risk and improve yields.</p>
    </div>
    <div class="card">
      <h3>Stronger community systems</h3>
      <p>Local groups coordinate training, mentorship, and resource management through structured programs.</p>
    </div>
    <div class="card">
      <h3>More opportunities for youth</h3>
      <p>Skills development supports pathways into agriculture innovation, conservation work, and leadership.</p>
    </div>
  </div>

  <div style="margin-top:18px;">
    <a class="btn btn-primary" href="/impact">Read stories from the field</a>
  </div>
</section>

<section class="section" aria-labelledby="get-involved">
  <div class="split">
    <div>
      <h2 class="section-title" id="get-involved">Join the movement for a greener future</h2>
      <p class="section-lead">
        Whether you donate, volunteer, or partner, your action helps communities build long-term resilience for generations to come.
      </p>
    </div>
    <div>
      <div class="card">
        <h3 style="margin-bottom:6px;">Fast ways to get involved</h3>
        <div class="form-actions" style="margin-top:10px;">
          <a class="btn btn-primary" href="/donate">Donate</a>
          <a class="btn btn-secondary" href="/get-involved">Volunteer</a>
          <a class="btn btn-ghost" href="/contact">Contact us</a>
        </div>
        <p class="small" style="margin-top:10px;">
          Your official donation and contact details should be added to make submissions go to your team.
        </p>
      </div>
    </div>
  </div>
</section>

<script>
  (function () {
    const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReduced) return;

    const slides = document.querySelectorAll('.hero-slide');
    if (!slides || slides.length < 2) return;

    let idx = 0;
    const show = (nextIdx) => {
      slides[idx].classList.remove('is-active');
      idx = nextIdx;
      slides[idx].classList.add('is-active');
    };

    setInterval(() => {
      const next = (idx + 1) % slides.length;
      show(next);
    }, 6500);
  })();
</script>
@endsection

