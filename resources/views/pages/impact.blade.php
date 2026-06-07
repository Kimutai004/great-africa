@extends('layouts.app')

@section('title','Impact / Stories | Great Africa')

@section('content')
<section class="section" aria-labelledby="impact-title">
  <h1 class="section-title" id="impact-title">Impact / Stories</h1>
  <p class="section-lead" style="max-width:75ch;">
    Stories from the field show how climate-smart agriculture, conservation, and community empowerment can transform lives.
    Replace the sample cards with your real initiatives, results, and photos.
  </p>

  <div class="grid-3" style="margin-top:18px;">
    <div class="card">
      <h3>Resilient harvests through soil health</h3>
      <p>Farmers adopt soil conservation practices to improve productivity and reduce climate risk.</p>
      <div class="form-actions" style="margin-top:12px;">
        <a class="btn btn-ghost" href="#">Read story</a>
      </div>
    </div>
    <div class="card">
      <h3>Community conservation that protects water sources</h3>
      <p>Local groups coordinate restoration activities to strengthen watershed health.</p>
      <div class="form-actions" style="margin-top:12px;">
        <a class="btn btn-ghost" href="#">Read story</a>
      </div>
    </div>
    <div class="card">
      <h3>Youth leadership in climate-smart farming</h3>
      <p>Mentorship and skills build confidence for young people to lead innovation in their communities.</p>
      <div class="form-actions" style="margin-top:12px;">
        <a class="btn btn-ghost" href="#">Read story</a>
      </div>
    </div>
  </div>

  <div class="card" style="margin-top:18px;">
    <h3>Want to share an update?</h3>
    <p class="small">Use the contact form to send story ideas, photos, or partnership proposals.</p>
    <div class="form-actions">
      <a class="btn btn-primary" href="/contact">Contact us</a>
      <a class="btn btn-secondary" href="/events">See upcoming events</a>
    </div>
  </div>
</section>
@endsection

