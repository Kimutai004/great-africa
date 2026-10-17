@extends('layouts.app')

@section('title', 'Great Africa — Climate Resilience & Sustainable Agriculture in Kenya & Africa')
@section('meta_description', 'Great Africa empowers communities through climate-smart agriculture, environmental conservation, and youth & women-led innovation across Kenya and Africa.')

@section('content')

<!-- ================= HERO ================= -->
<section class="hero" aria-labelledby="hero-title">
    <div class="hero-media" aria-hidden="true">
        <img src="{{ asset('images/hero-1.jpg') }}" alt="" fetchpriority="high" />
    </div>

    <div class="container hero-inner">
        <div class="hero-copy">
            <p class="eyebrow"><span class="num">GREAT</span> Africa — Est. Kenya</p>

            <h1 class="display" id="hero-title">
                Generational resilience, grown from the ground up.
            </h1>

            <p class="hero-lead">
                We equip farming communities with climate-smart agriculture,
                restore the landscapes they depend on, and back the youth and
                women leading the work — so livelihoods outlast the climate
                that is changing around them.
            </p>

            <div class="hero-ctas">
                <a class="btn btn-invert" href="/donate">Support the work</a>
                <a class="btn btn-line-invert" href="/programs">Explore programs</a>
            </div>

            <div class="hero-note">
                <span>Community-led</span>
                <span>Climate-focused</span>
                <span>Youth &amp; women at the centre</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="stat-bar" role="list" aria-label="Impact at a glance">
            @foreach (config('site.stats') as $stat)
                <div class="stat-cell" role="listitem">
                    <div class="stat-num">{{ $stat['value'] }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- ================= 01 — MISSION ================= -->
<section class="section" aria-labelledby="mission-title">
    <div class="container">

        <div class="split split-wide">

            <div class="reveal">
                <p class="eyebrow"><span class="num">01</span> Who we are</p>
                <h2 class="h2" id="mission-title" style="margin:1.1rem 0 1.25rem;">
                    An African-led response to a generational challenge.
                </h2>
                <p class="lead">
                    Great Africa — Generational Resilience Environment Agriculture
                    Transdevelopment Africa — works with communities, county
                    governments, and development partners to make smallholder
                    farming resilient, landscapes restorable, and opportunity
                    accessible to the young people and women who live there.
                </p>
                <p style="margin-top:1.25rem;">
                    <a class="link-arrow" href="/about">Read our story →</a>
                </p>
            </div>

            <div class="reveal">
                <ul class="feature-list">
                    <li data-index="A1">Climate-smart agriculture training for smallholder farmers</li>
                    <li data-index="A2">Watershed protection and ecosystem restoration</li>
                    <li data-index="A3">Youth skills, mentorship, and enterprise pathways</li>
                    <li data-index="A4">Women-led groups building sustainable livelihoods</li>
                    <li data-index="A5">Community food-security and seed-security programs</li>
                </ul>
            </div>

        </div>

    </div>
</section>

<!-- ================= 02 — PROGRAMS ================= -->
<section class="section section-alt" aria-labelledby="programs-title">
    <div class="container">

        <div class="section-head reveal">
            <div class="section-head-copy">
                <p class="eyebrow"><span class="num">02</span> What we do</p>
                <h2 class="h2" id="programs-title">Programs built around how communities actually live.</h2>
                <p class="lead">
                    Six connected program areas — because soil, water, food,
                    income, and opportunity are never separate problems.
                </p>
            </div>
            <a class="link-arrow" href="/programs">All programs →</a>
        </div>

        <div class="grid-3 reveal">

            <article class="card">
                <span class="card-num">P—01</span>
                <h3>Soil Health &amp; Regenerative Farming</h3>
                <p>
                    Composting, soil conservation, cover cropping, and improved
                    farming systems that rebuild fertility and cut climate risk.
                </p>
            </article>

            <article class="card">
                <span class="card-num">P—02</span>
                <h3>Water Stewardship &amp; Irrigation</h3>
                <p>
                    Community water management, watershed protection, and
                    drought-resilience solutions for arid and semi-arid lands.
                </p>
            </article>

            <article class="card">
                <span class="card-num">P—03</span>
                <h3>Natural Resource Conservation</h3>
                <p>
                    Ecosystem restoration, biodiversity protection, and
                    sustainable land management led by the communities who
                    depend on them.
                </p>
            </article>

            <article class="card">
                <span class="card-num">P—04</span>
                <h3>Youth Empowerment</h3>
                <p>
                    Practical skills, mentorship, and enterprise pathways in
                    climate-smart agriculture for young people.
                </p>
            </article>

            <article class="card">
                <span class="card-num">P—05</span>
                <h3>Women's Livelihoods</h3>
                <p>
                    Tools, training, and market access for women-led groups
                    building sustainable household income.
                </p>
            </article>

            <article class="card">
                <span class="card-num">P—06</span>
                <h3>Food Security &amp; Seed Systems</h3>
                <p>
                    Household resilience through local seed banks, diversified
                    crops, and farmer-to-farmer learning.
                </p>
            </article>

        </div>

    </div>
</section>

<!-- ================= 03 — IMPACT ================= -->
<section class="section section-dark" aria-labelledby="impact-title">
    <div class="container">

        <div class="split split-narrow">

            <div class="reveal">
                <p class="eyebrow"><span class="num">03</span> Evidence, not promises</p>
                <h2 class="h2" id="impact-title" style="margin:1.1rem 0 1.25rem;">
                    Impact you can trace to a field, a family, a season.
                </h2>
                <p class="lead">
                    We measure what changes: yields, household income, tree
                    survival, water access, and the number of farmers —
                    especially women and youth — leading practices in their
                    own communities.
                </p>
                <div class="hero-ctas" style="margin-top:2rem;">
                    <a class="btn btn-invert" href="/impact">Impact stories</a>
                </div>
            </div>

            <div class="reveal">
                <figure class="quote-block">
                    <blockquote>
                        “The training did not just change how we farm.
                        It changed what we believe our land can do.”
                    </blockquote>
                    <figcaption>Smallholder farmer · Nakuru County</figcaption>
                </figure>
            </div>

        </div>

    </div>
</section>

<!-- ================= 04 — EVENTS ================= -->
<section class="section" aria-labelledby="events-title">
    <div class="container">

        <div class="section-head reveal">
            <div class="section-head-copy">
                <p class="eyebrow"><span class="num">04</span> In the field</p>
                <h2 class="h2" id="events-title">Upcoming events &amp; field days.</h2>
            </div>
            <a class="link-arrow" href="/events">All events →</a>
        </div>

        @if ($events->isEmpty())
            <div class="empty-state reveal">
                <h3>No published events yet.</h3>
                <p>Field days, training sessions, and community forums will be listed here. Check back soon.</p>
                <a class="btn" href="/contact">Propose an event</a>
            </div>
        @else
            <div class="event-list reveal">
                @foreach ($events as $event)
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
                                <p>{{ \Illuminate\Support\Str::limit($event->description, 160) }}</p>
                            @endif
                            <p class="event-meta">{{ $event->location ?? 'Location TBA' }}</p>
                        </div>

                        @if ($event->link_url)
                            <a class="link-arrow" href="{{ $event->link_url }}" target="_blank" rel="noreferrer">
                                {{ $event->link_text ?? 'Register →' }}
                            </a>
                        @else
                            <a class="link-arrow" href="/contact">Register interest →</a>
                        @endif
                    </article>
                @endforeach
            </div>
        @endif

    </div>
</section>

<!-- ================= 05 — NEWS ================= -->
<section class="section section-alt" aria-labelledby="news-title">
    <div class="container">

        <div class="section-head reveal">
            <div class="section-head-copy">
                <p class="eyebrow"><span class="num">05</span> News &amp; insights</p>
                <h2 class="h2" id="news-title">Latest from Great Africa.</h2>
            </div>
            <a class="link-arrow" href="/blog">All news →</a>
        </div>

        @if ($posts->isEmpty())
            <div class="empty-state reveal">
                <h3>No published posts yet.</h3>
                <p>Program updates, community stories, and field notes will appear here.</p>
            </div>
        @else
            <div class="grid-3 reveal">
                @foreach ($posts as $post)
                    <article class="media-card">
                        @if ($post->image_path)
                            <a class="media-frame" href="/blog/{{ $post->id }}" tabindex="-1" aria-hidden="true">
                                <img src="{{ $post->image_path }}" alt="" loading="lazy" />
                            </a>
                        @else
                            <a class="media-frame-placeholder" href="/blog/{{ $post->id }}" aria-hidden="true" tabindex="-1">Great Africa</a>
                        @endif

                        <div class="media-body">
                            <div class="meta-row">
                                <span>{{ $post->published_at ? $post->published_at->format('d M Y') : '' }}</span>
                                <span>{{ $post->category ?? 'News' }}</span>
                            </div>
                            <h3><a href="/blog/{{ $post->id }}">{{ $post->title }}</a></h3>
                            <p>{{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->body ?? ''), 120) }}</p>
                            <a class="link-arrow" href="/blog/{{ $post->id }}">Read article →</a>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif

    </div>
</section>


<!-- ================= 06 — GET INVOLVED ================= -->
<section class="section" aria-labelledby="involved-title">
    <div class="container">

        <div class="section-head reveal">
            <div class="section-head-copy">
                <p class="eyebrow"><span class="num">06</span> Take action</p>
                <h2 class="h2" id="involved-title">Three ways to move this work forward.</h2>
            </div>
        </div>

        <div class="grid-3 reveal">

            <article class="card">
                <span class="card-num">Give</span>
                <h3>Fund the work</h3>
                <p>
                    Your donation puts training materials, seedlings, and tools
                    directly into community hands.
                </p>
                <a class="link-arrow" href="/donate">Donate →</a>
            </article>

            <article class="card">
                <span class="card-num">Serve</span>
                <h3>Volunteer your skills</h3>
                <p>
                    From field training to mentoring youth groups, we match your
                    time and skills to real community needs.
                </p>
                <a class="link-arrow" href="/get-involved">Volunteer →</a>
            </article>

            <article class="card">
                <span class="card-num">Partner</span>
                <h3>Build with us</h3>
                <p>
                    Corporates, foundations, and institutions: collaborate on
                    programs aligned to climate and agriculture.
                </p>
                <a class="link-arrow" href="/contact">Partner with us →</a>
            </article>

        </div>

    </div>
</section>

<!-- ================= NEWSLETTER ================= -->
<section class="section section-dark" aria-labelledby="newsletter-title">
    <div class="container">

        <div class="newsletter-band reveal" style="background:transparent; border-color:rgba(244,241,234,.18);">
            <div>
                <h2 id="newsletter-title" style="color:var(--paper);">Stay close to the field.</h2>
                <p style="color:rgba(244,241,234,.65);">
                    Field stories, event invitations, and program outcomes —
                    a few times a year, no noise.
                </p>
                @if (session('newsletter_success'))
                    <p class="alert" style="margin-top:1rem; border-color:var(--ochre); background:rgba(194,103,42,.12); color:var(--paper);">
                        {{ session('newsletter_success') }}
                    </p>
                @endif
            </div>

            <form class="newsletter-form" action="{{ route('newsletter.store') }}" method="post" aria-label="Newsletter signup">
                @csrf
                <label for="newsletter-email" style="position:absolute; left:-9999px;">Email address</label>
                <input id="newsletter-email" type="email" name="email" placeholder="Your email address" required />
                <button class="btn btn-green" type="submit">Subscribe</button>
            </form>

        </div>

    </div>
</section>

@endsection
