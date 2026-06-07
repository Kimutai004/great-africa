@extends('layouts.app')

@section('title','Blog / News | Great Africa')

@section('content')
<section class="section" aria-labelledby="blog-title">
  <h1 class="section-title" id="blog-title">Blog / News</h1>
  <p class="section-lead" style="max-width:75ch;">
    Updates from our programs, community stories, and insights from climate-smart agriculture and conservation work.
    Replace sample posts with your real articles.
  </p>

  <div class="grid-3" style="margin-top:18px;">
    <div class="card">
      <h3>5 Ways Soil Health Supports Food Security</h3>
      <p class="small">Published: {{ date('M d, Y', strtotime('-3 days')) }} • Category: Sustainable Agriculture</p>
      <p>Practical guidance on soil conservation and how healthy soils strengthen resilience.</p>
      <div class="form-actions" style="margin-top:12px;">
        <a class="btn btn-ghost" href="#">Read more</a>
      </div>
    </div>
    <div class="card">
      <h3>Community Conservation: Protecting Water Sources</h3>
      <p class="small">Published: {{ date('M d, Y', strtotime('-2 weeks')) }} • Category: Conservation</p>
      <p>How local coordination restores ecosystems and supports long-term watershed health.</p>
      <div class="form-actions" style="margin-top:12px;">
        <a class="btn btn-ghost" href="#">Read more</a>
      </div>
    </div>
    <div class="card">
      <h3>Youth and Women Leadership in Climate-Smart Solutions</h3>
      <p class="small">Published: {{ date('M d, Y', strtotime('-1 month')) }} • Category: Empowerment</p>
      <p>Lessons from mentoring and community-led learning that empowers sustainable change.</p>
      <div class="form-actions" style="margin-top:12px;">
        <a class="btn btn-ghost" href="#">Read more</a>
      </div>
    </div>
  </div>

  <div class="card" style="margin-top:18px;">
    <h3 style="margin-bottom:8px;">Newsletter subscription</h3>
    <p class="small">Subscribe for updates on events, program outcomes, and opportunities to support Great Africa.</p>
    <form class="form" action="#" method="post" onsubmit="return false;">
      <div class="field">
        <label for="newsletter-email">Email address</label>
        <input id="newsletter-email" name="email" type="email" required placeholder="you@example.com" />
      </div>
      <div class="form-actions">
        <button class="btn btn-primary" type="submit">Subscribe</button>
        <a class="btn btn-secondary" href="/contact">Ask a question</a>
      </div>
      <p class="small">Placeholder submission target. Connect to your email marketing workflow when ready.</p>
    </form>
  </div>
</section>
@endsection

