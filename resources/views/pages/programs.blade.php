@extends('layouts.app')

@section('title', 'Programs & Projects — Great Africa')
@section('meta_description', 'Six connected program areas: soil health, water stewardship, conservation, youth empowerment, women’s livelihoods, and food security across Kenya.')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <p class="eyebrow"><span class="num">Programs</span> What we do</p>
        <h1 class="h1">Six programs. One connected system.</h1>
        <p class="lead">
            Soil, water, food, income, and opportunity are never separate
            problems — so we never treat them as separate programs.
        </p>
        <p class="page-crumbs"><a href="/">Home</a> · Programs</p>
    </div>
</section>

<!-- PROGRAMS DETAIL -->
<section class="section">
    <div class="container">

        <div class="grid-2 reveal" style="grid-template-columns:1fr;">

            <article class="card" style="flex-direction:row; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
                <div style="flex:1 1 300px;">
                    <span class="card-num">P—01</span>
                    <h3 class="h3" style="margin:0.6rem 0 0.75rem;">Soil Health &amp; Regenerative Farming</h3>
                    <p>
                        Healthy soil is the first climate technology. We train
                        farmers in composting, conservation tillage, cover
                        cropping, agroforestry, and soil-water conservation —
                        practices that rebuild fertility and buffer harvests
                        against drought.
                    </p>
                    <ul class="feature-list" style="margin-top:1.5rem;">
                        <li data-index="01">Farmer field schools across each growing season</li>
                        <li data-index="02">Demo plots managed by community lead farmers</li>
                        <li data-index="03">Compost &amp; bio-input production groups</li>
                    </ul>
                </div>
            </article>

            <article class="card" style="flex-direction:row; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
                <div style="flex:1 1 300px;">
                    <span class="card-num">P—02</span>
                    <h3 class="h3" style="margin:0.6rem 0 0.75rem;">Water Stewardship &amp; Irrigation</h3>
                    <p>
                        In arid and semi-arid lands, water decides everything.
                        We support community water management, catchment
                        protection, sand dams, and low-cost irrigation so
                        farming survives the dry season.
                    </p>
                    <ul class="feature-list" style="margin-top:1.5rem;">
                        <li data-index="01">Watershed mapping with community water committees</li>
                        <li data-index="02">Rainwater harvesting &amp; small-scale irrigation</li>
                        <li data-index="03">Spring and riverbank protection works</li>
                    </ul>
                </div>
            </article>

            <article class="card" style="flex-direction:row; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
                <div style="flex:1 1 300px;">
                    <span class="card-num">P—03</span>
                    <h3 class="h3" style="margin:0.6rem 0 0.75rem;">Natural Resource Conservation</h3>
                    <p>
                        Restored landscapes protect livelihoods. Our
                        conservation programs combine native tree planting,
                        biodiversity corridors, and sustainable land-use
                        planning led by the communities who live there.
                    </p>
                    <ul class="feature-list" style="margin-top:1.5rem;">
                        <li data-index="01">Native tree nurseries &amp; restoration sites</li>
                        <li data-index="02">Community conservation areas</li>
                        <li data-index="03">Sustainable land-management planning</li>
                    </ul>
                </div>
            </article>

            <article class="card" style="flex-direction:row; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
                <div style="flex:1 1 300px;">
                    <span class="card-num">P—04</span>
                    <h3 class="h3" style="margin:0.6rem 0 0.75rem;">Youth Empowerment</h3>
                    <p>
                        Young people are not future beneficiaries — they are
                        today's practitioners. We provide hands-on skills,
                        mentorship, and enterprise pathways in climate-smart
                        agriculture and conservation work.
                    </p>
                    <ul class="feature-list" style="margin-top:1.5rem;">
                        <li data-index="01">Agriculture &amp; conservation skills bootcamps</li>
                        <li data-index="02">Youth enterprise incubation</li>
                        <li data-index="03">Mentorship networks with agri-professionals</li>
                    </ul>
                </div>
            </article>

            <article class="card" style="flex-direction:row; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
                <div style="flex:1 1 300px;">
                    <span class="card-num">P—05</span>
                    <h3 class="h3" style="margin:0.6rem 0 0.75rem;">Women's Livelihoods</h3>
                    <p>
                        Women run most smallholder farms and household food
                        systems. We back women-led groups with tools, training,
                        savings structures, and market access so income stays
                        in women's hands.
                    </p>
                    <ul class="feature-list" style="margin-top:1.5rem;">
                        <li data-index="01">Women-led production groups</li>
                        <li data-index="02">Post-harvest handling &amp; value addition</li>
                        <li data-index="03">Market linkages &amp; savings groups</li>
                    </ul>
                </div>
            </article>

            <article class="card" style="flex-direction:row; flex-wrap:wrap; gap:2rem; align-items:flex-start;">
                <div style="flex:1 1 300px;">
                    <span class="card-num">P—06</span>
                    <h3 class="h3" style="margin:0.6rem 0 0.75rem;">Food Security &amp; Seed Systems</h3>
                    <p>
                        Resilient food systems start with seed. Community seed
                        banks, crop diversification, and farmer-to-farmer
                        learning keep locally adapted varieties — and food
                        sovereignty — in community control.
                    </p>
                    <ul class="feature-list" style="margin-top:1.5rem;">
                        <li data-index="01">Community seed banks &amp; seed fairs</li>
                        <li data-index="02">Nutrition gardens &amp; kitchen plots</li>
                        <li data-index="03">Farmer exchange &amp; learning visits</li>
                    </ul>
                </div>
            </article>

        </div>

    </div>
</section>

<!-- CTA -->
<section class="cta-band">
    <div class="container cta-band-inner">
        <div>
            <h2>Work with Great Africa.</h2>
            <p>Partner with us to scale sustainable agriculture, conservation, and community empowerment.</p>
        </div>
        <div class="cta-band-actions">
            <a class="btn btn-invert" href="/contact">Partner with us</a>
            <a class="btn btn-line-invert" href="/donate">Support programs</a>
        </div>
    </div>
</section>

@endsection

