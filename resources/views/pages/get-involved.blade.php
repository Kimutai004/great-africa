@extends('layouts.app')

@section('title','Get Involved | Great Africa')

@section('content')
<section class="section" aria-labelledby="involved-title">
  <h1 class="section-title" id="involved-title">Get Involved</h1>
  <p class="section-lead" style="max-width:78ch;">
    Volunteer, donate, or share your skills. Your involvement helps communities build resilience and protect the environment.
  </p>

  <div class="split" style="margin-top:18px;">
    <div class="card">
      <h3>Volunteer signup</h3>
      @if (session('success'))
        <div class="card" role="status" aria-live="polite" style="margin-bottom:14px;">
          {{ session('success') }}
        </div>
      @endif

      <form class="form" action="{{ route('get-involved.store') }}" method="post" aria-label="Volunteer signup form">
        @csrf

        <div class="field">
          <label for="name">Full name</label>
          <input id="name" name="name" type="text" autocomplete="name" required />
        </div>
        <div class="field">
          <label for="email">Email address</label>
          <input id="email" name="email" type="email" autocomplete="email" required />
        </div>
        <div class="field">
          <label for="phone">Phone number (Kenya)</label>
          <input id="phone" name="phone" type="tel" autocomplete="tel" required />
        </div>
        <div class="field">
          <label for="location">County / Area</label>
          <input id="location" name="location" type="text" placeholder="e.g., Nairobi" required />
        </div>
        <div class="field">
          <label for="interest">What would you like to support?</label>
          <select id="interest" name="interest" required>
            <option value="">Select an option</option>
            <option>Community outreach</option>
            <option>Climate-smart agriculture training</option>
            <option>Environmental conservation / restoration</option>
            <option>Youth mentoring</option>
            <option>Women empowerment activities</option>
            <option>Event support</option>
            <option>Other</option>
          </select>
        </div>
        <div class="field">
          <label for="message">Short message</label>
          <textarea id="message" name="message" placeholder="Tell us about your experience and availability." required></textarea>
        </div>

        <div class="form-actions">
          <button class="btn btn-primary" type="submit">Submit volunteer request</button>
          <a class="btn btn-secondary" href="/contact">Ask questions</a>
        </div>
        <p class="small">By submitting, you agree to be contacted by Great Africa about volunteer opportunities.</p>

      </form>
    </div>

    <div class="card">
      <h3>Donate</h3>
      <p>
        Donations support farm inputs, training, conservation activities, and empowerment programs.
        Replace the placeholder donation details with your official payment link(s).
      </p>

      <div class="grid-3" style="grid-template-columns:1fr; margin-top:14px;">
        <div class="card" style="padding:14px;">
          <h3 style="font-size:16px;">Suggested donation options</h3>
          <p class="small" style="margin-top:8px;">
            • KES 2,000 — training materials
            <br/>• KES 10,000 — support for conservation activity
            <br/>• KES 25,000 — community program facilitation
          </p>
        </div>
      </div>

      <div class="form-actions" style="margin-top:14px;">
        <a class="btn btn-primary" href="/donate">Donate now</a>
        <a class="btn btn-ghost" href="/impact">See results</a>
      </div>

      <hr class="sep" />

      <h3>Partner with us</h3>
      <p class="small">Corporates, foundations, and institutions can collaborate on projects aligned to sustainable agriculture and conservation.</p>
      <div class="form-actions">
        <a class="btn btn-secondary" href="/contact">Partnership enquiry</a>
      </div>
    </div>
  </div>
</section>
@endsection

