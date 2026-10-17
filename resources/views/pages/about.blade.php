@extends('layouts.app')

@section('title', 'About Us — Great Africa')
@section('meta_description', 'Great Africa (GREAT Africa) is an African-led NGO building climate resilience through sustainable agriculture, conservation, and youth & women empowerment.')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero on-dark">
    <div class="container">
        <p class="eyebrow"><span class="num">GREAT</span> Africa — Est. Kenya</p>
        <h1 class="h1">An African-led answer to a generational challenge.</h1>
        <p class="lead">
            Great Africa exists to build resilience that outlasts us — in the
            soil, in local economies, and in the people who lead their
            communities through a changing climate.
        </p>
        <p class="page-crumbs"><a href="/">Home</a> · About</p>
    </div>
</section>

<!-- STORY + STATS -->
<section class="section">
    <div class="container">

        <div class="split split-wide">

            <div class="reveal">
                <p class="eyebrow"><span class="num">01</span> Our story</p>
                <h2 class="h2" style="margin:1.1rem 0 1.25rem;">
                    Born from the belief that resilience is grown, not given.
                </h2>
                <p class="lead">
                    Great Africa — Generational Resilience Environment Agriculture
                    Transdevelopment Africa — began where the effects of a
                    changing climate land hardest: on smallholder farms and the
                    communities around them.
                </p>
                <p style="margin-top:1.25rem; color:var(--ink-soft);">
                    Today we work alongside farmers, youth groups, women-led
                    enterprises, county governments, and development partners
                    across Kenya — combining climate-smart agriculture,
                    environmental restoration, and skills development into one
                    connected approach. Because a good harvest means little
                    without water, and neither means much without opportunity.
                </p>
            </div>

            <div class="reveal">
                <div class="stat-bar stat-bar-light" role="list" aria-label="Our reach">
                    @foreach (config('site.stats') as $stat)
                        <div class="stat-cell" role="listitem">
                            <div class="stat-num">{{ $stat['value'] }}</div>
                            <div class="stat-label">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>

<!-- MISSION / VISION -->
<section class="section section-dark">
    <div class="container">

        <div class="grid-2 reveal" style="border-color:var(--line-invert); background:var(--line-invert);">

            <article class="card">
                <span class="card-num">Mission</span>
                <h3 class="h3">What we do every day</h3>
                <p>
                    To build generational resilience by equipping communities
                    with climate-smart agricultural practices, environmental
                    stewardship, and sustainable livelihood opportunities that
                    improve long-term well-being.
                </p>
            </article>

            <article class="card">
                <span class="card-num">Vision</span>
                <h3 class="h3">What we are working toward</h3>
                <p>
                    A resilient Africa where communities thrive through
                    sustainable agriculture, restored ecosystems, and empowered
                    youth and women leading change for generations to come.
                </p>
            </article>

        </div>

    </div>
</section>

<!-- VALUES -->
<section class="section">
    <div class="container">

        <div class="section-head reveal">
            <div class="section-head-copy">
                <p class="eyebrow"><span class="num">02</span> What guides us</p>
                <h2 class="h2">Values that show up in the field, not just on paper.</h2>
            </div>
        </div>

        <div class="grid-4 reveal">

            <article class="card">
                <span class="card-num">V—01</span>
                <h3>Community leadership</h3>
                <p>Change lasts when communities own it. We follow local leadership, not replace it.</p>
            </article>

            <article class="card">
                <span class="card-num">V—02</span>
                <h3>Environmental stewardship</h3>
                <p>We protect ecosystems and promote responsible natural resource management.</p>
            </article>

            <article class="card">
                <span class="card-num">V—03</span>
                <h3>Practical innovation</h3>
                <p>We back adaptive, field-tested solutions — not experiments on people's livelihoods.</p>
            </article>

            <article class="card">
                <span class="card-num">V—04</span>
                <h3>Youth &amp; women first</h3>
                <p>The people most affected by climate change lead our programs, not just attend them.</p>
            </article>

        </div>

    </div>
</section>

<!-- APPROACH + TIMELINE -->
<section class="section section-alt">
    <div class="container">

        <div class="split">

            <div class="reveal">
                <p class="eyebrow"><span class="num">03</span> How we work</p>
                <h2 class="h2" style="margin:1.1rem 0 1.25rem;">Local solutions, long-term horizons.</h2>
                <p class="lead">
                    We stay after the launch event. Our approach is built around
                    multi-season relationships with communities: training,
                    mentorship, restoration work, and field-based learning that
                    compounds year after year.
                </p>

                <ul class="feature-list" style="margin-top:2rem;">
                    <li data-index="B1">Listen first — programs designed with communities, not for them</li>
                    <li data-index="B2">Train farmers as trainers, so knowledge stays local</li>
                    <li data-index="B3">Measure outcomes, publish what we learn</li>
                    <li data-index="B4">Partner with county governments for policy alignment</li>
                </ul>
            </div>

            <div class="reveal">
                <div class="timeline">
                    <div class="timeline-item">
                        <span class="timeline-year">Phase 01</span>
                        <h3>Community mapping &amp; trust building</h3>
                        <p>We start with listening: mapping needs, assets, and existing community structures before any program begins.</p>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-year">Phase 02</span>
                        <h3>Training &amp; demonstration</h3>
                        <p>Farmer field schools, demo plots, and hands-on sessions build skills on real farms, in real conditions.</p>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-year">Phase 03</span>
                        <h3>Restoration &amp; enterprise</h3>
                        <p>Watershed work, tree planting, and youth/women enterprise support turn skills into lasting livelihoods.</p>
                    </div>
                    <div class="timeline-item">
                        <span class="timeline-year">Phase 04</span>
                        <h3>Handover &amp; scaling</h3>
                        <p>Community teams take the lead; we measure, document, and replicate what works in new areas.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- TEAM -->
<section class="section" aria-labelledby="team-title">
    <div class="container">

        <div class="section-head reveal">
            <div class="section-head-copy">
                <p class="eyebrow"><span class="num">04</span> The people</p>
                <h2 class="h2" id="team-title">Leadership &amp; team.</h2>
                <p class="lead">
                    A lean team with deep field experience. Replace these
                    placeholders with your real team photos and bios.
                </p>
            </div>
        </div>

        <div class="team-grid reveal">

            <article class="team-card">
                <div class="team-avatar" aria-hidden="true">FO</div>
                <div>
                    <h3>Founder &amp; Director</h3>
                    <span class="team-role">Leadership</span>
                </div>
                <p>Sets strategic direction and keeps programs rooted in community priorities.</p>
            </article>

            <article class="team-card">
                <div class="team-avatar" aria-hidden="true">PG</div>
                <div>
                    <h3>Programs Lead</h3>
                    <span class="team-role">Programs</span>
                </div>
                <p>Coordinates agriculture, conservation, and empowerment programs across counties.</p>
            </article>

            <article class="team-card">
                <div class="team-avatar" aria-hidden="true">FC</div>
                <div>
                    <h3>Field Coordinators</h3>
                    <span class="team-role">Communities</span>
                </div>
                <p>Run farmer field schools and community sessions on the ground, season after season.</p>
            </article>

            <article class="team-card">
                <div class="team-avatar" aria-hidden="true">MR</div>
                <div>
                    <h3>Monitoring &amp; Research</h3>
                    <span class="team-role">Evidence</span>
                </div>
                <p>Tracks outcomes, manages data, and turns field learning into reports partners can trust.</p>
            </article>

        </div>

    </div>
</section>


<!-- PARTNERS -->
<section class="section section-alt">
    <div class="container">

        <div class="section-head reveal">
            <div class="section-head-copy">
                <p class="eyebrow"><span class="num">05</span> Friends of the work</p>
                <h2 class="h2">Partners &amp; collaborators.</h2>
                <p class="lead">Institutions and communities we work alongside. Replace these with your real partner logos.</p>
            </div>
            <a class="link-arrow" href="/contact">Become a partner →</a>
        </div>

        <div class="partners-strip reveal">
            <div class="partner-cell">County Governments</div>
            <div class="partner-cell">Community Groups</div>
            <div class="partner-cell">Research Partners</div>
            <div class="partner-cell">Funders</div>
            <div class="partner-cell">NGO Network</div>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="cta-band">
    <div class="container cta-band-inner">
        <div>
            <h2>Build a resilient future with us.</h2>
            <p>Your support puts training, tools, and trees where they are needed most.</p>
        </div>
        <div class="cta-band-actions">
            <a class="btn btn-invert" href="/donate">Donate</a>
            <a class="btn btn-line-invert" href="/get-involved">Volunteer</a>
        </div>
    </div>
</section>

@endsection
