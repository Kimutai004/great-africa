@extends('layouts.app')

@section('title','Programs / Projects | Great Africa')

@section('content')

<!-- NARROW HERO -->
<section class="page-hero">
    <div class="container">

        <div class="kicker">
            <span class="dot"></span>
            Our impact areas • Community-led development
        </div>

        <h1 class="page-title">Programs & Projects</h1>

        <p class="page-lead">
            We combine sustainable agriculture, environmental conservation,
            and community empowerment to build long-term resilience across Kenya and Africa.
        </p>

    </div>
</section>

<!-- CONTENT -->
<section class="section">

    <div class="grid-3">

        <div class="card">
            <h3>Soil Health & Regenerative Practices</h3>
            <p>Training on soil conservation, composting, improved farming systems, and regenerative agriculture.</p>
        </div>

        <div class="card">
            <h3>Water Stewardship & Irrigation</h3>
            <p>Community-based water management, watershed protection, and drought resilience solutions.</p>
        </div>

        <div class="card">
            <h3>Natural Resource Conservation</h3>
            <p>Restoration of ecosystems, biodiversity protection, and sustainable land management practices.</p>
        </div>

    </div>

    <div class="grid-3" style="margin-top:18px;">

        <div class="card">
            <h3>Youth Empowerment</h3>
            <p>Skills training, mentorship, and opportunities in climate-smart agriculture and leadership.</p>
        </div>

        <div class="card">
            <h3>Women Empowerment</h3>
            <p>Supporting women-led groups with tools, training, and pathways to sustainable livelihoods.</p>
        </div>

        <div class="card">
            <h3>Food Security Programs</h3>
            <p>Improving household resilience through sustainable food systems and farming innovation.</p>
        </div>

    </div>

    <!-- CTA -->
    <div class="program-cta">

        <h2>Work with Great Africa</h2>

        <p>
            Partner with us to scale sustainable agriculture, conservation, and community empowerment projects.
        </p>

        <div class="hero-actions">
            <a class="btn btn-primary" href="/contact">Partner With Us</a>
            <a class="btn btn-secondary" href="/donate">Support Programs</a>
        </div>

    </div>

</section>

@endsection