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
        @forelse($events as $event)
            <article class="event-card">
                <div class="event-date">
                    @if($event->start_date)
                        <span class="day">{{ $event->start_date->format('d') }}</span>
                        <span class="month">{{ $event->start_date->format('M') }}</span>
                    @else
                        <span class="day">—</span>
                        <span class="month">—</span>
                    @endif
                </div>

                <div class="event-content">
                    <h3>{{ $event->title }}</h3>

                    <p class="event-meta">📍 {{ $event->location ?? '—' }}</p>

                    @if($event->description)
                        <p>{{ $event->description }}</p>
                    @else
                        <p></p>
                    @endif

                    @if($event->link_url)
                        <a class="event-link" href="{{ $event->link_url }}" target="_blank" rel="noreferrer">
                            {{ $event->link_text ?? 'Register Interest →' }}
                        </a>
                    @else
                        <a class="event-link" href="/contact">Register Interest →</a>
                    @endif
                </div>
            </article>
        @empty
            <div class="card" style="grid-column:1 / -1;">
                <h3>No published events yet.</h3>
                <p>Check back soon or contact us to propose an event.</p>
            </div>
        @endforelse
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

