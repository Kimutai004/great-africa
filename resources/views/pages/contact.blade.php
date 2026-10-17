@extends('layouts.app')

@section('title', 'Contact — Great Africa')
@section('meta_description', 'Reach Great Africa about partnerships, volunteer opportunities, program support, or community enquiries.')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero on-dark">
    <div class="container">
        <p class="eyebrow"><span class="num">GREAT</span> Africa — Est. Kenya</p>
        <h1 class="h1">Let's start a conversation.</h1>
        <p class="lead">
            Partnerships, volunteering, program questions, community
            enquiries — we read everything that comes through here.
        </p>
        <p class="page-crumbs"><a href="/">Home</a> · Contact</p>
    </div>
</section>

<!-- CONTACT -->
<section class="section">
    <div class="container">

        <div class="split split-narrow">

            <!-- FORM -->
            <div class="card reveal" style="border:1px solid var(--line);">
                <h2 class="h3">Send us a message</h2>

                @if (session('success'))
                    <p class="alert" role="status" aria-live="polite">{{ session('success') }}</p>
                @endif

                @if ($errors->any())
                    <p class="alert alert-error">
                        Please review the highlighted fields below.
                    </p>
                @endif

                <form class="form" action="{{ route('contact.store') }}" method="post" aria-label="Contact form">
                    @csrf

                    <div class="form-row form-row-2">
                        <div class="field">
                            <label for="contact-name">Full name</label>
                            <input id="contact-name" name="name" type="text" autocomplete="name" required value="{{ old('name') }}" />
                            @error('name')<span class="field-error">{{ $message }}</span>@enderror
                        </div>

                        <div class="field">
                            <label for="contact-email">Email address</label>
                            <input id="contact-email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}" />
                            @error('email')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-row form-row-2">
                        <div class="field">
                            <label for="contact-phone">Phone (optional)</label>
                            <input id="contact-phone" name="phone" type="tel" autocomplete="tel" value="{{ old('phone') }}" />
                        </div>

                        <div class="field">
                            <label for="contact-topic">Topic</label>
                            <select id="contact-topic" name="topic" required>
                                <option value="" @selected(! old('topic'))>Select a topic</option>
                                @foreach (['Partnership', 'Donations', 'Volunteer', 'Programs / Projects', 'Events', 'Other'] as $topic)
                                    <option @selected(old('topic') === $topic)>{{ $topic }}</option>
                                @endforeach
                            </select>
                            @error('topic')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="contact-message">Message</label>
                        <textarea id="contact-message" name="message" required placeholder="Write your message here…">{{ old('message') }}</textarea>
                        @error('message')<span class="field-error">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-actions">
                        <button class="btn btn-green" type="submit">Send message</button>
                    </div>

                </form>
            </div>

            <!-- DIRECT CONTACT -->
            <div class="stack-lg">

                <div class="card reveal" style="border:1px solid var(--line);">
                    <h2 class="h3">Direct contact</h2>
                    <dl class="detail-list">
                        <div>
                            <dt>Email</dt>
                            <dd><a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a></dd>
                        </div>
                        <div>
                            <dt>Phone</dt>
                            <dd><a href="tel:{{ config('site.phone_href') }}">{{ config('site.phone') }}</a></dd>
                        </div>
                        <div>
                            <dt>Location</dt>
                            <dd>{{ config('site.location') }}</dd>
                        </div>
                    </dl>
                </div>

                <div class="card reveal" style="border:1px solid var(--line);">
                    <h2 class="h3">For partners &amp; donors</h2>
                    <p>
                        We collaborate with organizations aligned to sustainable
                        agriculture, climate-smart innovation, conservation, and
                        youth and women empowerment.
                    </p>
                    <div class="form-actions">
                        <a class="btn" href="/programs">Explore programs</a>
                        <a class="btn" href="/donate">Support our work</a>
                    </div>
                </div>

                <div class="card reveal" style="border:1px solid var(--line);">
                    <h2 class="h3">Newsletter</h2>
                    <p>Updates on events, field stories, and opportunities to support community resilience.</p>

                    @if (session('newsletter_success'))
                        <p class="alert">{{ session('newsletter_success') }}</p>
                    @endif

                    <form class="newsletter-form" action="{{ route('newsletter.store') }}" method="post" aria-label="Newsletter signup" style="margin-top:1rem;">
                        @csrf
                        <label for="contact-newsletter-email" style="position:absolute; left:-9999px;">Email address</label>
                        <input id="contact-newsletter-email" type="email" name="email" placeholder="you@example.com" required />
                        <button class="btn btn-green" type="submit">Subscribe</button>
                    </form>
                </div>

            </div>

        </div>

    </div>
</section>

@endsection

