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
        @forelse($posts as $post)
            <article class="blog-card">

                <div class="blog-image">
                    @if($post->image_path)
                        <img src="{{ $post->image_path }}" alt="{{ $post->title }}" />
                    @else
                        <img src="/images/placeholder-og.jpg" alt="{{ $post->title }}" />
                    @endif
                </div>

                <div class="blog-content">

                    <div class="blog-meta">
                        <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : '' }}</span>
                        <span class="dot-sep">•</span>
                        <span>{{ $post->category ?? 'News' }}</span>
                    </div>

                    <h3>{{ $post->title }}</h3>

                    @if($post->excerpt)
                        <p>{{ $post->excerpt }}</p>
                    @else
                        <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->body ?? ''), 160) }}</p>
                    @endif

                    <a class="blog-link" href="/blog/{{ $post->id }}">Read article →</a>


                </div>

            </article>
        @empty
            <div class="card" style="grid-column:1 / -1;">
                <h3>No published posts yet.</h3>
                <p>Check back soon.</p>
            </div>
        @endforelse
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

