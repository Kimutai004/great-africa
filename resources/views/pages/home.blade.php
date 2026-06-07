@extends('layouts.app')

@section('title','Great Africa NGO | Building Climate-Smart Agriculture in Kenya & Africa')

@section('content')
<section class="hero" aria-labelledby="hero-title" style="padding-top: 12px;">
  <style>
    /* Keep hero spacing fine under sticky header */
    .hero{padding-top:8px;}
  </style>
  <div style="position:relative;border-radius:24px;padding:22px 0;">
    @include('partials.hero-gradient')
    <div class="hero-grid">
      <div>
        <div class="kicker"><span class="dot" aria-hidden="true"></span> Climate-smart farming • Youth & women empowerment</div>
        <h1 id="hero-title">Building Generational Resilience Through Sustainable Agriculture in Kenya & Africa</h1>
        <p>
          Great Africa (Generational Resilience Environment Agriculture Transdevelopment Africa) works with communities to protect
          natural resources, strengthen food security, and accelerate climate-smart innovation—so families, especially youth and
          women, can thrive.
        </p>

        <div class="hero-actions" role="group" aria-label="Primary calls to action">
          <a class="btn btn-primary" href="/donate">Donate to support climate-smart agriculture</a>
          <a class="btn btn-secondary" href="/get-involved">Volunteer with our community programs</a>
          <a class="btn btn-ghost" href="/programs">Explore our programs</a>
        </div>

        <div class="stat-grid" role="list" aria-label="Impact highlights">
          <div class="stat" role="listitem">
            <strong>Community-led</strong>
            <span>Programs designed with local farmers, youth, and women groups.</span>
          </div>
          <div class="stat" role="listitem">
            <strong>Climate-smart</strong>
            <span>Practical innovations for soil health, water stewardship, and resilience.</span>
          </div>
          <div class="stat" role="listitem">
            <strong>Environment first</strong>
            <span>Conservation and natural resource management at the core.</span>
          </div>
          <div class="stat" role="listitem">
            <strong>Measurable outcomes</strong>
            <span>Learning, reporting, and continuous improvement across projects.</span>
          </div>
        </div>
      </div>

      <aside class="hero-card" aria-label="Quick overview">
        <h2 style="margin:0 0 10px;color:var(--brand-900);font-size:18px;">How you can help</h2>
        <div class="grid-3" style="grid-template-columns:1fr; gap:10px; margin-top:10px;">
          <div class="card">
            <h3>Donate</h3>
            <p>Fuel farm inputs, training, and conservation activities that strengthen food security.</p>
            <div style="margin-top:12px;">
              <a class="btn btn-primary" style="width:100%" href="/donate">Donate now</a>
            </div>
          </div>
          <div class="card">
            <h3>Volunteer</h3>
            <p>Support field days, mentorship sessions, and community outreach events.</p>
            <div style="margin-top:12px;">
              <a class="btn btn-secondary" style="width:100%" href="/get-involved">Join as a volunteer</a>
            </div>
          </div>
          <div class="card">
            <h3>Partner</h3>
            <p>Work with us on climate-smart innovation, sustainability, and youth employment.</p>
            <div style="margin-top:12px;">
              <a class="btn btn-ghost" style="width:100%" href="/contact">Become a partner</a>
            </div>
          </div>
        </div>
        <p class="small" style="margin-top:12px;">
          Placeholder links used until you share your official donation and contact details.
        </p>
      </aside>
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
@endsection

