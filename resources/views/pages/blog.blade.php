@extends('layouts.app')

@section('title', 'News & Insights — Great Africa')
@section('meta_description', 'Program updates, community stories, and field insights from Great Africa across Kenya and Africa.')

@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <p class="eyebrow"><span class="num">News</span> From the field</p>
        <h1 class="h1">News &amp; insights.</h1>
        <p class="lead">
            Program updates, community stories, and what we are learning
            about climate, agriculture, and resilience.
        </p>
        <p class="page-crumbs"><a href="/">Home</a> · News</p>
    </div>
</section>

<!-- BLOG GRID -->
<section class="section">
    <div class="container">

        @if ($posts->isEmpty())
            <div class="empty-state reveal">
                <h3>No published posts yet.</h3>
                <p>Program updates and field stories will appear here soon.</p>
            </div>
        @else
            <div class="grid-3 reveal" style="border:0; background:transparent; gap:clamp(1.5rem, 3vw, 2.5rem);">
                @foreach ($posts as $post)
                    <article class="media-card" style="border:1px solid var(--line);">
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
                            <p>{{ $post->excerpt ?: \Illuminate\Support\Str::limit(strip_tags($post->body ?? ''), 150) }}</p>
                            <a class="link-arrow" href="/blog/{{ $post->id }}">Read article →</a>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif

    </div>
</section>

<!-- NEWSLETTER -->
<section class="section section-dark">
    <div class="container">
        <div class="newsletter-band reveal" style="background:transparent; border-color:rgba(244,241,234,.18);">
            <div>
                <h2 style="color:var(--paper);">Never miss a field note.</h2>
                <p style="color:rgba(244,241,234,.65);">
                    Subscribe for event invitations, program outcomes, and
                    stories from the communities we work with.
                </p>
                @if (session('newsletter_success'))
                    <p class="alert" style="margin-top:1rem; border-color:var(--ochre); background:rgba(194,103,42,.12); color:var(--paper);">
                        {{ session('newsletter_success') }}
                    </p>
                @endif
            </div>
            <form class="newsletter-form" action="{{ route('newsletter.store') }}" method="post" aria-label="Newsletter signup">
                @csrf
                <label for="blog-newsletter-email" style="position:absolute; left:-9999px;">Email address</label>
                <input id="blog-newsletter-email" type="email" name="email" placeholder="Your email address" required />
                <button class="btn btn-green" type="submit">Subscribe</button>
            </form>
        </div>
    </div>
</section>

@endsection

