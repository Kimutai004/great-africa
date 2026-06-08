@extends('layouts.app')

@section('title','Contact | Great Africa')

@section('content')
<section class="section" aria-labelledby="contact-title">
  <div class="page-banner">
    <div class="section">
      <h1 class="section-title" id="contact-title">Contact</h1>
      <p class="section-lead" style="max-width:75ch;">
        Reach out to Great Africa about partnerships, volunteer opportunities, program support, or community enquiries.
      </p>
    </div>
  </div>

  <div class="split" style="margin-top:18px;">
    <div class="card">
      <h3>Send us a message</h3>
      <form class="form" action="#" method="post" onsubmit="return false;" aria-label="Contact form">
        <div class="field">
          <label for="contact-name">Full name</label>
          <input id="contact-name" name="name" type="text" autocomplete="name" required />
        </div>
        <div class="field">
          <label for="contact-email">Email address</label>
          <input id="contact-email" name="email" type="email" autocomplete="email" required />
        </div>
        <div class="field">
          <label for="contact-phone">Phone number (optional)</label>
          <input id="contact-phone" name="phone" type="tel" autocomplete="tel" />
        </div>
        <div class="field">
          <label for="contact-topic">Topic</label>
          <select id="contact-topic" name="topic" required>
            <option value="">Select a topic</option>
            <option>Partnership</option>
            <option>Donations</option>
            <option>Volunteer</option>
            <option>Programs / Projects</option>
            <option>Events</option>
            <option>Other</option>
          </select>
        </div>
        <div class="field">
          <label for="contact-message">Message</label>
          <textarea id="contact-message" name="message" required placeholder="Write your message here..."></textarea>
        </div>
        <div class="form-actions">
          <button class="btn btn-primary" type="submit">Send message</button>
          <a class="btn btn-secondary" href="/events">View events</a>
        </div>
        <p class="small">Placeholder form action. Hook this to Laravel routes or an email endpoint when ready.</p>
      </form>
    </div>

    <div class="card">
      <h3>Direct contact</h3>
      <p class="small" style="margin-top:8px;">
        <strong>Email:</strong> hello@example.org<br/>
        <strong>Phone:</strong> +254 700 000 000<br/>
        <strong>Location:</strong> Nairobi, Kenya
      </p>

      <hr class="sep" />

      <h3>For partners and donors</h3>
      <p class="small">
        We collaborate with organizations aligned to sustainable agriculture, climate-smart innovation, environmental conservation,
        and youth and women empowerment.
      </p>

      <div class="form-actions" style="margin-top:12px;">
        <a class="btn btn-primary" href="/programs">Explore programs</a>
        <a class="btn btn-ghost" href="/donate">Support our work</a>
      </div>

      <hr class="sep" />

      <h3>Newsletter</h3>
      <p class="small">Subscribe for updates on events, field stories, and opportunities to support community resilience.</p>
      <form class="form" action="#" method="post" onsubmit="return false;">
        <div class="field">
          <label for="contact-news-email">Email address</label>
          <input id="contact-news-email" name="email" type="email" required placeholder="you@example.com" />
        </div>
        <div class="form-actions">
          <button class="btn btn-primary" type="submit">Subscribe</button>
        </div>
      </form>
    </div>
  </div>
</section>
@endsection

