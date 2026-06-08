@extends('layouts.app')

@section('title', 'About Us | Great Africa')

@section('content')

<!-- HERO -->
<section class="about-hero" aria-labelledby="about-title">
    <div class="about-hero-overlay"></div>

    <div class="container">
        <div class="about-hero-content">

            <div class="kicker">
                <span class="dot"></span>
                Climate resilience • Sustainable agriculture • Community empowerment
            </div>

            <h1 id="about-title">
                Building Sustainable Futures for Communities Across Africa
            </h1>

            <p class="hero-lead">
                Great Africa (Generational Resilience Environment Agriculture
                Transdevelopment Africa) is dedicated to empowering communities
                through climate-smart agriculture, environmental conservation,
                food security, and youth & women-led transformation initiatives.
            </p>

            <div class="hero-actions">
                <a class="btn btn-primary" href="/get-involved">
                    Join Our Mission
                </a>

                <a class="btn btn-secondary" href="/contact">
                    Contact Us
                </a>
            </div>

        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="section" aria-labelledby="our-story">

    <div class="split">

        <div>
            <span class="section-tag">Who We Are</span>

            <h2 class="section-title" id="our-story">
                Empowering communities through resilience and innovation
            </h2>

            <p class="section-lead">
                Great Africa works with local communities, youth groups,
                women-led initiatives, farmers, and development partners to
                create practical solutions that improve livelihoods while
                protecting the environment for future generations.
            </p>
        </div>

        <div class="about-highlight-card">
            <div class="highlight-item">
                <strong>10,000+</strong>
                <span>Farmers reached</span>
            </div>

            <div class="highlight-item">
                <strong>25+</strong>
                <span>Communities supported</span>
            </div>

            <div class="highlight-item">
                <strong>120+</strong>
                <span>Youth groups engaged</span>
            </div>
        </div>

    </div>

</section>

<!-- MISSION / VISION -->
<section class="section section-soft">

    <div class="grid-2">

        <div class="card mission-card">
            <div class="card-icon">🌱</div>

            <h3>Our Mission</h3>

            <p>
                To build generational resilience by equipping communities with
                climate-smart agricultural practices, environmental stewardship,
                and sustainable livelihood opportunities that improve long-term
                well-being.
            </p>
        </div>

        <div class="card mission-card">
            <div class="card-icon">🌍</div>

            <h3>Our Vision</h3>

            <p>
                A resilient Africa where communities thrive through sustainable
                agriculture, restored ecosystems, empowered youth and women,
                and inclusive economic opportunities.
            </p>
        </div>

    </div>

</section>

<!-- CORE VALUES -->
<section class="section" aria-labelledby="core-values">

    <div class="section-heading-center">
        <span class="section-tag">Our Values</span>

        <h2 class="section-title" id="core-values">
            What drives our work
        </h2>

        <p class="section-lead center-text">
            Our programs are guided by sustainability, collaboration,
            inclusion, and community-led impact.
        </p>
    </div>

    <div class="grid-3 values-grid">

        <div class="card value-card">
            <div class="value-icon">🌿</div>

            <h3>Environmental Stewardship</h3>

            <p>
                We protect ecosystems and promote responsible natural resource
                management for healthier communities and landscapes.
            </p>
        </div>

        <div class="card value-card">
            <div class="value-icon">💡</div>

            <h3>Climate Innovation</h3>

            <p>
                We support practical and adaptive solutions that strengthen
                resilience against climate change and environmental risk.
            </p>
        </div>

        <div class="card value-card">
            <div class="value-icon">🤝</div>

            <h3>Community Empowerment</h3>

            <p>
                We believe meaningful change happens when communities,
                especially youth and women, are empowered to lead.
            </p>
        </div>

    </div>

</section>

<!-- APPROACH -->
<section class="section section-soft">

    <div class="split split-reverse">

        <div class="card image-card">
            <img
                src="/images/about-community.jpg"
                alt="Community members participating in climate-smart agriculture training"
            >
        </div>

        <div>
            <span class="section-tag">Our Approach</span>

            <h2 class="section-title">
                Local solutions with long-term impact
            </h2>

            <p class="section-lead">
                We partner with communities through training, mentorship,
                conservation initiatives, and field-based learning to strengthen
                resilience and improve livelihoods.
            </p>

            <div class="feature-list">

                <div class="feature-item">
                    <span>✔</span>
                    Climate-smart farming education
                </div>

                <div class="feature-item">
                    <span>✔</span>
                    Environmental restoration programs
                </div>

                <div class="feature-item">
                    <span>✔</span>
                    Youth & women leadership initiatives
                </div>

                <div class="feature-item">
                    <span>✔</span>
                    Food security & sustainability projects
                </div>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->
<section class="section">

    <div class="cta-box">

        <span class="section-tag light">
            Join Great Africa
        </span>

        <h2>
            Together we can create a greener and more resilient future
        </h2>

        <p>
            Your support helps communities build sustainable livelihoods,
            restore ecosystems, and empower future generations across Africa.
        </p>

        <div class="hero-actions">

            <a class="btn btn-primary" href="/donate">
                Donate Today
            </a>

            <a class="btn btn-secondary" href="/get-involved">
                Become a Volunteer
            </a>

        </div>

    </div>

</section>

@endsection