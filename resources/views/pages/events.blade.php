@extends('layouts.app')

@section('title','Events | Great Africa')

@section('content')

<!-- HERO -->
<section class="page-hero events-hero">
    <div class="container">

        <div class="kicker">
            <span class="dot"></span>
            Field learning • Community training • Climate action
        </div>

        <h1 class="page-title">Events</h1>

        <p class="page-lead">
            Field days, training sessions, workshops, and community forums
            that bring climate-smart agriculture and conservation to life.
        </p>

    </div>
</section>

<!-- EVENTS -->
<section class="section">

    <div class="events-grid">

        <!-- EVENT CARD -->
        <article class="event-card">

            <div class="event-date">
                <span class="day">{{ date('d', strtotime('+2 weeks')) }}</span>
                <span class="month">{{ date('M', strtotime('+2 weeks')) }}</span>
            </div>

            <div class="event-content">
                <h3>Field Day: Soil Health & Regenerative Practices</h3>

                <p class="event-meta">📍 Nairobi County</p>

                <p>
                    Hands-on training on composting, mulching, and soil conservation techniques.
                </p>

                <a class="event-link" href="#">Register Interest →</a>
            </div>

        </article>

        <!-- EVENT CARD -->
        <article class="event-card">

            <div class="event-date">
                <span class="day">{{ date('d', strtotime('+1 month')) }}</span>
                <span class="month">{{ date('M', strtotime('+1 month')) }}</span>
            </div>

            <div class="event-content">
                <h3>Water Stewardship & Drought Resilience Workshop</h3>

                <p class="event-meta">📍 Kenya</p>

                <p>
                    Community education on watershed protection and irrigation efficiency.
                </p>

                <a class="event-link" href="#">Request Invitation →</a>
            </div>

        </article>

        <!-- EVENT CARD -->
        <article class="event-card">

            <div class="event-date">
                <span class="day">{{ date('d', strtotime('+6 weeks')) }}</span>
                <span class="month">{{ date('M', strtotime('+6 weeks')) }}</span>
            </div>

            <div class="event-content">
                <h3>Youth & Women Climate Forum</h3>

                <p class="event-meta">📍 Kenya</p>

                <p>
                    Mentorship, leadership development, and networking for community innovation.
                </p>

                <a class="event-link" href="#">Join Forum →</a>
            </div>

        </article>

    </div>

    <!-- CTA -->
    <div class="event-cta">

        <h2>Want to host an event with us?</h2>

        <p>
            We partner with institutions, NGOs, and communities to deliver impactful climate-focused events.
        </p>

        <div class="hero-actions">
            <a class="btn btn-primary" href="/contact">Contact Us</a>
            <a class="btn btn-secondary" href="/programs">View Programs</a>
        </div>

    </div>

</section>

@endsection