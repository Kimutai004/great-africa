@extends('layouts.app')

@section('title','Programs / Projects | Great Africa')

@section('content')
<section class="section" aria-labelledby="programs-title">
  <h1 class="section-title" id="programs-title">Programs / Projects</h1>
  <p class="section-lead" style="max-width:75ch;">
    Our work combines sustainable agriculture, environmental conservation, and human empowerment.
    Explore program areas where we support communities in Kenya and beyond.
  </p>

  <div class="grid-3" style="margin-top:18px;">
    <div class="card">
      <h3>Soil Health & Regenerative Practices</h3>
      <p>Training on soil conservation, composting, improved farm practices, and resilient crop management.</p>
    </div>
    <div class="card">
      <h3>Water Stewardship & Irrigation Support</h3>
      <p>Community education on watershed protection, efficient water use, and drought resilience.</p>
    </div>
    <div class="card">
      <h3>Conservation & Natural Resource Management</h3>
      <p>Restoration activities and community-led approaches to protect land, biodiversity, and water sources.</p>
    </div>
  </div>

  <div class="grid-3" style="margin-top:14px;">
    <div class="card">
      <h3>Youth Empowerment & Skills</h3>
      <p>Mentorship and learning opportunities for youth in climate-smart agriculture and conservation work.</p>
    </div>
    <div class="card">
      <h3>Women Empowerment & Livelihoods</h3>
      <p>Strengthening women-led groups with leadership support and pathways to sustainable livelihoods.</p>
    </div>
    <div class="card">
      <h3>Food Security & Community Resilience</h3>
      <p>Supporting practical solutions that improve household stability and long-term resilience.</p>
    </div>
  </div>

  <div class="card" style="margin-top:18px;">
    <h3>Work with us</h3>
    <p>
      If you are a partner, donor, or institution interested in collaborating, reach out through our contact page.
      We welcome projects aligned with sustainable agriculture, conservation, and empowerment.
    </p>
    <div class="form-actions">
      <a class="btn btn-primary" href="/contact">Partner with Great Africa</a>
      <a class="btn btn-secondary" href="/donate">Support our programs</a>
    </div>
  </div>
</section>
@endsection

