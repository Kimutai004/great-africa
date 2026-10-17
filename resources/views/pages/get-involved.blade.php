@extends('layouts.app')

@section('title', 'Get Involved — Great Africa')
@section('meta_description', 'Volunteer, donate, or partner with Great Africa to help communities build climate resilience across Kenya and Africa.')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero on-dark">
    <div class="container">
        <p class="eyebrow"><span class="num">GREAT</span> Africa — Est. Kenya</p>
        <h1 class="h1">Your skills. Your time. Your support.</h1>
        <p class="lead">
            Every way into this work matters — volunteer, give, or partner.
            Pick the one that fits, and we will take it from there.
        </p>
        <p class="page-crumbs"><a href="/">Home</a> · Get Involved</p>
    </div>
</section>

<!-- WAYS IN -->
<section class="section" style="padding-bottom:0;">
    <div class="container">
        <div class="grid-3 reveal">

            <article class="card">
                <span class="card-num">01</span>
                <h3>Volunteer</h3>
                <p>Field training, mentoring, event support, and skills-based help — matched to real community needs.</p>
                <a class="link-arrow" href="#volunteer-form">Sign up below →</a>
            </article>

            <article class="card">
                <span class="card-num">02</span>
                <h3>Donate</h3>
                <p>Fund training materials, conservation work, and livelihood programs. See exactly what different amounts unlock.</p>
                <a class="link-arrow" href="/donate">Donate →</a>
            </article>

            <article class="card">
                <span class="card-num">03</span>
                <h3>Partner</h3>
                <p>Corporates, foundations, and institutions collaborate on programs aligned to climate and agriculture.</p>
                <a class="link-arrow" href="/contact">Partnership enquiry →</a>
            </article>

        </div>
    </div>
</section>

<!-- VOLUNTEER FORM -->
<section class="section" id="volunteer-form">
    <div class="container">

        <div class="split split-narrow">

            <div class="card reveal" style="border:1px solid var(--line);">
                <h2 class="h3">Volunteer signup</h2>

                @if (session('success'))
                    <p class="alert" role="status" aria-live="polite">{{ session('success') }}</p>
                @endif

                @if ($errors->any())
                    <p class="alert alert-error">Please review the highlighted fields below.</p>
                @endif

                <form class="form" action="{{ route('get-involved.store') }}" method="post" aria-label="Volunteer signup form">
                    @csrf

                    <div class="form-row form-row-2">
                        <div class="field">
                            <label for="vol-name">Full name</label>
                            <input id="vol-name" name="name" type="text" autocomplete="name" required value="{{ old('name') }}" />
                            @error('name')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                        <div class="field">
                            <label for="vol-email">Email address</label>
                            <input id="vol-email" name="email" type="email" autocomplete="email" required value="{{ old('email') }}" />
                            @error('email')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="form-row form-row-2">
                        <div class="field">
                            <label for="vol-phone">Phone number (Kenya)</label>
                            <input id="vol-phone" name="phone" type="tel" autocomplete="tel" required value="{{ old('phone') }}" />
                            @error('phone')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                        <div class="field">
                            <label for="vol-location">County / Area</label>
                            <input id="vol-location" name="location" type="text" placeholder="e.g., Nairobi" required value="{{ old('location') }}" />
                            @error('location')<span class="field-error">{{ $message }}</span>@enderror
                        </div>
                    </div>

                    <div class="field">
                        <label for="vol-interest">What would you like to support?</label>
                        <select id="vol-interest" name="interest" required>
                            <option value="" @selected(! old('interest'))>Select an option</option>
                            @foreach ([
                                'Community outreach',
                                'Climate-smart agriculture training',
                                'Environmental conservation / restoration',
                                'Youth mentoring',
                                'Women empowerment activities',
                                'Event support',
                                'Other',
                            ] as $interest)
                                <option @selected(old('interest') === $interest)>{{ $interest }}</option>
                            @endforeach
                        </select>
                        @error('interest')<span class="field-error">{{ $message }}</span>@enderror
                    </div>

                    <div class="field">
                        <label for="vol-message">Short message</label>
                        <textarea id="vol-message" name="message" placeholder="Tell us about your experience and availability." required>{{ old('message') }}</textarea>
                        @error('message')<span class="field-error">{{ $message }}</span>@enderror
                    </div>

                    <div class="form-actions">
                        <button class="btn btn-green" type="submit">Submit volunteer request</button>
                    </div>

                    <p class="small">By submitting, you agree to be contacted by Great Africa about volunteer opportunities.</p>

                </form>
            </div>

            <!-- SIDEBAR -->
            <div class="stack-lg">

                <div class="card reveal" style="border:1px solid var(--line);">
                    <h2 class="h3">What volunteering looks like</h2>
                    <ul class="feature-list" style="margin-top:1rem;">
                        <li data-index="V1">Field training days with farmer groups</li>
                        <li data-index="V2">Youth mentoring &amp; skills sessions</li>
                        <li data-index="V3">Tree planting &amp; restoration drives</li>
                        <li data-index="V4">Event support &amp; logistics</li>
                        <li data-index="V5">Pro-bono skills — media, data, finance, legal</li>
                    </ul>
                </div>

                <div class="card reveal" style="border:1px solid var(--line);">
                    <h2 class="h3">Volunteering FAQ</h2>

                    <div class="faq" style="margin-top:0.5rem;">
                        <details>
                            <summary>Do I need agricultural experience?</summary>
                            <div class="faq-answer">No. We match roles to your skills and provide training for field positions. Enthusiasm and reliability matter more than a CV.</div>
                        </details>
                        <details>
                            <summary>Is there a minimum time commitment?</summary>
                            <div class="faq-answer">Most field roles ask for at least one season so community relationships stay stable. Skills-based volunteering can be more flexible.</div>
                        </details>
                        <details>
                            <summary>Are volunteer roles paid?</summary>
                            <div class="faq-answer">Volunteer roles are unpaid. We cover field expenses (transport, meals) for program days where possible.</div>
                        </details>
                        <details>
                            <summary>Can groups or companies volunteer?</summary>
                            <div class="faq-answer">Yes — we run corporate and group volunteer days. Use the contact form and mention your group size and dates.</div>
                        </details>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- CTA -->
<section class="cta-band">
    <div class="container cta-band-inner">
        <div>
            <h2>Prefer to give instead?</h2>
            <p>Every shilling goes toward training, tools, and restoration in communities.</p>
        </div>
        <div class="cta-band-actions">
            <a class="btn btn-invert" href="/donate">Donate now</a>
        </div>
    </div>
</section>

@endsection

