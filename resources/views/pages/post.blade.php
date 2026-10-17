@extends('layouts.app')

@section('title', ($post->title ?? 'Article') . ' — Great Africa')
@section('meta_description', \Illuminate\Support\Str::limit(strip_tags($post->excerpt ?? $post->body ?? ''), 155))

@section('content')

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="container">
        <p class="eyebrow"><span class="num">News</span> {{ $post->category ?? 'Article' }}</p>
        <h1 class="h1">{{ $post->title }}</h1>
        <p class="lead">
            {{ $post->published_at ? $post->published_at->format('d M Y') : '' }}
        </p>
        <p class="page-crumbs"><a href="/">Home</a> · <a href="/blog">News</a> · Article</p>
    </div>
</section>

<!-- ARTICLE -->
<section class="section">
    <div class="container">

        <div class="article-layout">

            <aside class="article-aside">

                <div class="aside-card">
                    <h2 class="aside-title">Article details</h2>
                    <dl class="article-meta-list">
                        <div>
                            <dt>Category</dt>
                            <dd>{{ $post->category ?? 'News' }}</dd>
                        </div>
                        <div>
                            <dt>Published</dt>
                            <dd>{{ $post->published_at ? $post->published_at->format('d M Y') : '—' }}</dd>
                        </div>
                    </dl>
                    <p style="margin-top:1.25rem;">
                        <a class="link-arrow" href="/blog">← Back to news</a>
                    </p>
                </div>

                <div class="aside-card">
                    <h2 class="aside-title">Related articles</h2>

                    @php
                        $related = isset($posts) ? $posts : collect();
                        $related = $related->where('id', '!=', $post->id)->take(4);
                    @endphp

                    @forelse ($related as $r)
                        <a class="related-item" href="/blog/{{ $r->id }}">
                            <span class="related-cat">{{ $r->category ?? 'News' }}</span>
                            <span class="related-title">{{ $r->title }}</span>
                        </a>
                    @empty
                        <p class="small">No related articles yet.</p>
                    @endforelse
                </div>

            </aside>

            <article class="article-body">

                @if (! empty($post->image_path))
                    <img src="{{ $post->image_path }}" alt="{{ $post->title }}" />
                @endif

                @if ($post->excerpt)
                    <p class="article-excerpt">{{ $post->excerpt }}</p>
                @endif

                {!! $post->body !!}

            </article>

        </div>

    </div>
</section>

@endsection

