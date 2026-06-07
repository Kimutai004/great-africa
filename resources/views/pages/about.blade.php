@extends('layouts.app')

@section('title','About Us | Great Africa')

@section('content')
<section class="section" aria-labelledby="about-title">
  <h1 class="section-title" id="about-title">About Great Africa</h1>
  <p class="section-lead" style="max-width:70ch;">
    Great Africa (Generational Resilience Environment Agriculture Transdevelopment Africa) is an NGO committed to
    sustainable agriculture, climate-smart innovation, and environmental conservation.
  </p>

  <div class="split" style="margin-top:18px;">
    <div class="card">
      <h3>Our mission</h3>
      <p>
        To build generational resilience by supporting communities with practical, climate-smart agricultural solutions and
        strengthening natural resource management—while empowering youth and women to lead change.
      </p>
    </div>
    <div class="card">
      <h3>Our approach</h3>
      <p>
        We work with communities in Kenya and across Africa through education, field-based learning, environmental stewardship,
        and collaboration with partners who share our commitment to food security and long-term sustainability.
      </p>
    </div>
  </div>

  <div class="grid-3" style="margin-top:18px;">
    <div class="card">
      <h3>Environment & people</h3>
      <p>We treat environmental conservation as a foundation for food security and community well-being.</p>
    </div>
    <div class="card">
      <h3>Climate-smart innovation</h3>
      <p>We support solutions that help communities adapt to climate variability and reduce risk.</p>
    </div>
    <div class="card">
      <h3>Empowerment with dignity</h3>
      <p>We prioritize meaningful opportunities for youth and women to participate and lead.</p>
    </div>
  </div>

  <div style="margin-top:18px;display:flex;gap:12px;flex-wrap:wrap;">
    <a class="btn btn-primary" href="/get-involved">Get involved</a>
    <a class="btn btn-secondary" href="/contact">Contact Great Africa</a>
  </div>
</section>
@endsection

