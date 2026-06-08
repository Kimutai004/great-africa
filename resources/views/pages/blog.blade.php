@extends('layouts.app')

@section('title','Blog / News | Great Africa')

@section('content')

<!-- HERO -->
<section class="page-hero blog-hero">
    <div class="container">

        <div class="kicker">
            <span class="dot"></span>
            Insights • Stories • Knowledge sharing
        </div>

        <h1 class="page-title">Blog & News</h1>

        <p class="page-lead">
            Updates from our programs, community stories, and insights from climate-smart agriculture
            and environmental conservation across Africa.
        </p>

    </div>
</section>

<!-- BLOG GRID -->
<section class="section">

    <div class="blog-grid">

        <!-- POST -->
        <article class="blog-card">

            <div class="blog-image">
                <img src="/images/blog/soil-health.jpg" alt="Soil health agriculture">
            </div>

            <div class="blog-content">

                <div class="blog-meta">
                    <span>{{ date('M d, Y', strtotime('-3 days')) }}</span>
                    <span class="dot-sep">•</span>
                    <span>Sustainable Agriculture</span>
                </div>

                <h3>5 Ways Soil Health Supports Food Security</h3>

                <p>
                    Practical guidance on soil conservation and how healthy soils strengthen community resilience.
                </p>

                <a class="blog-link" href="#">Read article →</a>

            </div>

        </article>

        <!-- POST -->
        <article class="blog-card">

            <div class="blog-image">
                <img src="/images/blog/water-conservation.jpg" alt="Water conservation community work">
            </div>

            <div class="blog-content">

                <div class="blog-meta">
                    <span>{{ date('M d, Y', strtotime('-2 weeks')) }}</span>
                    <span class="dot-sep">•</span>
                    <span>Conservation</span>
                </div>

                <h3>Community Conservation: Protecting Water Sources</h3>

                <p>
                    How local coordination restores ecosystems and strengthens watershed health.
                </p>

                <a class="blog-link" href="#">Read article →</a>

            </div>

        </article>

        <!-- POST -->
        <article class="blog-card">

            <div class="blog-image">
                <img src="/images/blog/youth-leadership.jpg" alt="Youth leadership training">
            </div>

            <div class="blog-content">

                <div class="blog-meta">
                    <span>{{ date('M d, Y', strtotime('-1 month')) }}</span>
                    <span class="dot-sep">•</span>
                    <span>Empowerment</span>
                </div>

                <h3>Youth & Women Leadership in Climate Solutions</h3>

                <p>
                    Lessons from mentoring programs that empower sustainable community-driven change.
                </p>

                <a class="blog-link" href="#">Read article →</a>

            </div>

        </article>

    </div>

    <!-- NEWSLETTER -->
    <div class="newsletter-box">

        <h2>Stay updated</h2>

        <p>
            Subscribe for updates on events, program outcomes, and opportunities to support Great Africa.
        </p>

        <form class="newsletter-form" action="#" method="post">

            <input
                type="email"
                name="email"
                placeholder="Enter your email address"
                required
            />

            <button class="btn btn-primary" type="submit">
                Subscribe
            </button>

        </form>

        <a class="newsletter-link" href="/contact">Or contact us directly →</a>

    </div>

</section>

@endsection