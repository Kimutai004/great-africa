@extends('layouts.app')

@section('title', 'Impact — Great Africa')
@section('meta_description', 'Real stories and measurable outcomes from Great Africa programs: farmer resilience, restored watersheds, and youth & women leadership across Kenya.')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero on-dark">
    <div class="container">
        <p class="eyebrow"><span class="num">GREAT</span> Africa — Est. Kenya</p>
        <h1 class="h1">Impact you can trace to a field.</h1>
        <p class="lead">
            Numbers matter — and so do the people behind them. Here is what
            our programs change, and how we know.
        </p>
        <p class="page-crumbs"><a href="/">Home</a> · Impact</p>
    </div>
</section>

<!-- STAT BAND -->
<section class="section" style="padding-bottom:0;">
    <div class="container">
        <div class="stat-bar stat-bar-light" role="list" aria-label="Impact numbers" style="border:1px solid var(--line);">
            @foreach (config('site.stats') as $stat)
                <div class="stat-cell" role="listitem">
                    <div class="stat-num">{{ $stat['value'] }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- OUTCOMES -->
<section class="section">
    <div class="container">

        <div class="section-head reveal">
            <div class="section-head-copy">
                <p class="eyebrow"><span class="num">01</span> Outcomes</p>
                <h2 class="h2">What we measure, and why it matters.</h2>
            </div>
        </div>

        <div class="grid-3 reveal">

            <article class="card">
                <span class="card-num">O—01</span>
                <h3>Resilient harvests</h3>
                <p>
                    Farmers adopting climate-smart practices report better
                    yields in poor rains and lower crop losses in dry spells —
                    the true test of resilience.
                </p>
            </article>

            <article class="card">
                <span class="card-num">O—02</span>
                <h3>Restored water &amp; land</h3>
                <p>
                    Protected catchments, rehabilitated springs, and native
                    tree cover bring water back to farms and families —
                    measured season by season.
                </p>
            </article>

            <article class="card">
                <span class="card-num">O—03</span>
                <h3>Leaders who stay</h3>
                <p>
                    Trained farmers become trainers. Youth groups start
                    enterprises. Women lead savings circles. The program ends;
                    the capacity does not.
                </p>
            </article>

        </div>

    </div>
</section>

<!-- STORIES -->
<section class="section section-alt">
    <div class="container">

        <div class="section-head reveal">
            <div class="section-head-copy">
                <p class="eyebrow"><span class="num">02</span> Field stories</p>
                <h2 class="h2">Stories from the communities we work with.</h2>
                <p class="lead">Replace these with real program stories and photos from the field.</p>
            </div>
        </div>

        <div class="grid-3 reveal">

            <article class="media-card">
                <div class="media-frame-placeholder" aria-hidden="true">Agriculture</div>
                <div class="media-body">
                    <span class="tag">Agriculture</span>
                    <h3>Resilient harvests through soil health</h3>
                    <p>
                        Farmers in our soil-health program adopted composting
                        and conservation practices — and held their harvests
                        together through a failed long-rains season.
                    </p>
                </div>
            </article>

            <article class="media-card">
                <div class="media-frame-placeholder" aria-hidden="true">Conservation</div>
                <div class="media-body">
                    <span class="tag">Conservation</span>
                    <h3>Protecting community water sources</h3>
                    <p>
                        Local water committees took charge of catchment
                        restoration — and a dry-season spring flowed again
                        for the first time in years.
                    </p>
                </div>
            </article>

            <article class="media-card">
                <div class="media-frame-placeholder" aria-hidden="true">Youth</div>
                <div class="media-body">
                    <span class="tag">Youth</span>
                    <h3>Youth leadership in climate-smart farming</h3>
                    <p>
                        A youth enterprise group turned training into a
                        village-scale nursery supplying seedlings to farms
                        across three sub-locations.
                    </p>
                </div>
            </article>

        </div>

    </div>
</section>

<!-- TESTIMONIAL -->
<section class="section section-dark">
    <div class="container">
        <div class="split">
            <div class="reveal">
                <p class="eyebrow"><span class="num">03</span> In their words</p>
                <h2 class="h2" style="margin-top:1.1rem;">The change, described by the people living it.</h2>
            </div>
            <div class="reveal">
                <figure class="quote-block">
                    <blockquote>
                        “Before the program, we farmed the way our parents did.
                        Now we farm for the weather we actually have.”
                    </blockquote>
                    <figcaption>Lead farmer · Program participant</figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-band">
    <div class="container cta-band-inner">
        <div>
            <h2>Have a story from the field?</h2>
            <p>Send us updates, photos, or partnership ideas. Your story inspires more change.</p>
        </div>
        <div class="cta-band-actions">
            <a class="btn btn-invert" href="/contact">Share a story</a>
            <a class="btn btn-line-invert" href="/events">View events</a>
        </div>
    </div>
</section>

@endsection

