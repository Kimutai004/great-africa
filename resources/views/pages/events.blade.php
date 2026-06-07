@extends('layouts.app')

@section('title','Events | Great Africa')

@section('content')
<section class="section" aria-labelledby="events-title">
  <h1 class="section-title" id="events-title">Events</h1>
  <p class="section-lead" style="max-width:75ch;">
    Field days, community training sessions, climate-smart workshops, and partner meetings.
    Add your real event dates, locations, and registration links.
  </p>

  <div class="grid-3" style="grid-template-columns:repeat(3,minmax(0,1fr)); margin-top:18px;">
    <div class="card">
      <h3>Field Day: Soil Health & Regenerative Practices</h3>
      <p class="small">Date: {{ date('M d, Y', strtotime('+2 weeks')) }}<br/>Location: Nairobi County (placeholder)</p>
      <p>Hands-on learning on composting, mulching, and soil conservation techniques.</p>
      <div class="form-actions" style="margin-top:12px;">
        <a class="btn btn-primary" href="#">Register interest</a>
      </div>
    </div>
    <div class="card">
      <h3>Workshop: Water Stewardship & Drought Resilience</h3>
      <p class="small">Date: {{ date('M d, Y', strtotime('+1 month')) }}<br/>Location: Kenya (placeholder)</p>
      <p>Community education on watershed protection and practical irrigation efficiency.</p>
      <div class="form-actions" style="margin-top:12px;">
        <a class="btn btn-primary" href="#">Request invitation</a>
      </div>
    </div>
    <div class="card">
      <h3>Community Forum: Youth & Women in Climate Solutions</h3>
      <p class="small">Date: {{ date('M d, Y', strtotime('+6 weeks')) }}<br/>Location: Kenya (placeholder)</p>
      <p>Mentorship, leadership development, and opportunities to connect with programs.</p>
      <div class="form-actions" style="margin-top:12px;">
        <a class="btn btn-primary" href="#">Join forum</a>
      </div>
    </div>
  </div>

  <div class="card" style="margin-top:18px;">
    <h3 style="margin-bottom:8px;">Host an event with us</h3>
    <p class="small">If you are an institution, donor, or partner planning a relevant event, send details through the contact page.</p>
    <div class="form-actions" style="margin-top:12px;">
      <a class="btn btn-secondary" href="/contact">Contact Great Africa</a>
      <a class="btn btn-ghost" href="/programs">View programs</a>
    </div>
  </div>
</section>
@endsection

