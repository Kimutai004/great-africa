@extends('layouts.app')

@section('title', 'Events — Great Africa')
@section('meta_description', 'Field days, training sessions, workshops, and community forums bringing climate-smart agriculture and conservation to life.')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <p class="eyebrow"><span class="num">Events</span> In the field</p>
        <h1 class="h1">Field days, training, and community forums.</h1>
        <p class="lead">
            Where climate-smart agriculture and conservation stop being slides
            and start being soil under your boots.
        </p>
        <p class="page-crumbs"><a href="/">Home</a> · Events</p>
    </div>
</section>

<!-- EVENTS -->
<section class="section">
    <div class="container">

        @forelse ($events as $event)
            <div class="event-list">
                <article class="event-row">
                    <div class="event-date">
                        @if ($event->start_date)
                            <span class="day">{{ $event->start_date->format('d') }}</span>
                            <span class="mon">{{ $event->start_date->format('M Y') }}</span>
                        @else
                            <span class="mon">TBA</span>
                        @endif
                    </div>

                    <div class="event-body">
                        <h3>{{ $event->title }}</h3>
                        @if ($event->description)
                            <p>{{ $event->description }}</p>
                        @endif
                        <p class="event-meta">
                            {{ $event->location ?? 'Location TBA' }}
                            @if ($event->end_date && $event->start_date && ! $event->start_date->isSameDay($event->end_date))
                                · {{ $event->start_date->format('d M') }} – {{ $event->end_date->format('d M Y') }}
                            @endif
                        </p>
                    </div>

                    @if ($event->link_url)
                        <a class="link-arrow" href="{{ $event->link_url }}" target="_blank" rel="noreferrer">
                            {{ $event->link_text ?? 'Register →' }}
                        </a>
                    @else
                        <a class="link-arrow" href="/contact">Register interest →</a>
                    @endif
                </article>
            </div>
        @empty
            <div class="empty-state reveal">
                <h3>No published events yet.</h3>
                <p>
                    Field days, trainings, and community forums will be listed
                    here as they are scheduled. Check back soon — or propose one.
                </p>
                <a class="btn" href="/contact">Propose an event</a>
            </div>
        @endforelse

    </div>
</section>

<!-- CTA -->
<section class="cta-band">
    <div class="container cta-band-inner">
        <div>
            <h2>Host an event with us.</h2>
            <p>We partner with institutions, NGOs, and communities to deliver climate-focused events.</p>
        </div>
        <div class="cta-band-actions">
            <a class="btn btn-invert" href="/contact">Contact us</a>
            <a class="btn btn-line-invert" href="/programs">View programs</a>
        </div>
    </div>
</section>

@endsection

