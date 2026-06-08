@extends('layouts.app')

@section('title','Impact / Stories | Great Africa')

@section('content')

<!-- HERO -->
<section class="page-hero impact-hero">
    <div class="container">

        <div class="kicker">
            <span class="dot"></span>
            Real stories • Real communities • Real impact
        </div>

        <h1 class="page-title">Impact Stories</h1>

        <p class="page-lead">
            Stories from the field show how climate-smart agriculture, conservation,
            and community empowerment are transforming lives across Kenya and Africa.
        </p>

    </div>
</section>

<!-- STORIES -->
<section class="section">

    <div class="stories-grid">

        <!-- STORY CARD -->
        <article class="story-card">
            <div class="story-image">
                <img src="/images/stories/soil-health.jpg" alt="Farmers improving soil health">
                <div class="story-overlay"></div>
                <span class="story-tag">Agriculture</span>
            </div>

            <div class="story-content">
                <h3>Resilient harvests through soil health</h3>
                <p>Farmers adopt soil conservation practices to improve productivity and reduce climate risk.</p>

                <a class="story-link" href="#">Read story →</a>
            </div>
        </article>

        <!-- STORY CARD -->
        <article class="story-card">
            <div class="story-image">
                <img src="/images/stories/water-conservation.jpg" alt="Community water conservation project">
                <div class="story-overlay"></div>
                <span class="story-tag">Conservation</span>
            </div>

            <div class="story-content">
                <h3>Protecting community water sources</h3>
                <p>Local groups coordinate restoration activities to strengthen watershed health.</p>

                <a class="story-link" href="#">Read story →</a>
            </div>
        </article>

        <!-- STORY CARD -->
        <article class="story-card">
            <div class="story-image">
                <img src="/images/stories/youth-farming.jpg" alt="Youth training in agriculture">
                <div class="story-overlay"></div>
                <span class="story-tag">Youth</span>
            </div>

            <div class="story-content">
                <h3>Youth leadership in climate-smart farming</h3>
                <p>Mentorship and skills build confidence for young people to lead innovation in their communities.</p>

                <a class="story-link" href="#">Read story →</a>
            </div>
        </article>

    </div>

    <!-- CTA -->
    <div class="story-cta">

        <h2>Want to share an impact story?</h2>

        <p>
            Send us updates, photos, or partnership ideas. Your story helps inspire more change.
        </p>

        <div class="hero-actions">
            <a class="btn btn-primary" href="/contact">Submit Story</a>
            <a class="btn btn-secondary" href="/events">View Events</a>
        </div>

    </div>

</section>

@endsection