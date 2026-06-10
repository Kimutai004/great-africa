@extends('layouts.app')

@section('title', ($post->title ?? 'Post') . ' | Great Africa')

@section('content')

<!-- HERO -->
<section class="page-hero">
    <div class="container">
        <div class="kicker">
            <span class="dot"></span>
            {{ $post->category ?? 'News' }}
        </div>

        <h1 class="page-title">{{ $post->title }}</h1>

        <p class="page-lead">
            {{ $post->published_at ? $post->published_at->format('M d, Y') : '' }}
        </p>
    </div>
</section>

<section class="section" style="margin:0; padding:0;">
    <div class="container" style="margin:0; padding:0; width:100%; max-width:100%;">


            @if(!empty($post->image_path))
            <div style="margin-bottom:18px; border-radius:16px; overflow:hidden; border:1px solid rgba(0,0,0,.05); max-width:820px; margin-inline:auto;">
                <img src="{{ $post->image_path }}" alt="{{ $post->title }}" style="width:100%; height:auto; max-height:260px; object-fit:cover;" />
            </div>
        @endif


        <div class="post-layout">
            <aside class="post-aside">
                <div class="post-meta-card">
                    <div class="post-meta-row">
                        <div class="post-meta-label">Category</div>
                        <div class="post-meta-value">{{ $post->category ?? 'News' }}</div>
                    </div>

                    <div class="post-meta-row">
                        <div class="post-meta-label">Published</div>
                        <div class="post-meta-value">{{ $post->published_at ? $post->published_at->format('M d, Y') : '-' }}</div>
                    </div>

                    <a href="/blog" class="btn btn-ghost" style="margin-top:14px; width:100%; display:inline-flex; justify-content:center;">
                        ← Back to Blog
                    </a>
                </div>

                <div class="related-wrap">
                    <h2 class="related-title">Related articles</h2>
                    <div class="related-list">
                        @php
                            $related = isset($posts)
                                ? $posts
                                : collect();

                            $related = $related
                                ->where('id', '!=', $post->id)
                                ->take(4);
                        @endphp

                        @forelse($related as $r)
                            <a class="related-item" href="/blog/{{ $r->id }}">
                                <div class="related-thumb">
                                    @if($r->image_path)
                                        <img src="{{ $r->image_path }}" alt="{{ $r->title }}" />
                                    @else
                                        <div class="related-thumb-placeholder"></div>
                                    @endif
                                </div>
                                <div class="related-body">
                                    <div class="related-meta">
                                        {{ $r->category ?? 'News' }}
                                    </div>
                                    <div class="related-text">{{ $r->title }}</div>
                                </div>
                            </a>
                        @empty
                            <div class="related-empty">No related articles.</div>
                        @endforelse
                    </div>
                </div>
            </aside>

            <article class="post-main">
                @if(!empty($post->excerpt))
                    <p class="post-excerpt">{{ $post->excerpt }}</p>
                @endif

                <div class="post-body">
                    {!! $post->body !!}
                </div>
            </article>
        </div>

        <style>
            .post-layout{
                display:grid;
                grid-template-columns: 1fr;
                gap:18px;
                align-items:start;
                width:100%;
                max-width:1100px;
                margin-inline:auto;
            }
            .post-aside{display:block;}

            .post-meta-card{
                background: rgba(255,255,255,0.9);
                border: 1px solid rgba(229,231,235,1);
                box-shadow: var(--shadow);
                border-radius: var(--radius);
                padding:16px;
            }
            .post-meta-row{display:flex; justify-content:space-between; gap:12px; padding:8px 0; border-bottom:1px solid rgba(0,0,0,.04);} 
            .post-meta-row:last-child{border-bottom:none;}
            .post-meta-label{color: var(--text-light); font-weight:700; font-size:.9rem;}
            .post-meta-value{color: var(--text); font-weight:800; font-size:.95rem; text-align:right;}

            .post-main{
                background: rgba(255,255,255,0.9);
                border: 1px solid rgba(229,231,235,1);
                box-shadow: var(--shadow);
                border-radius: var(--radius);
                padding:22px;
            }
            .post-excerpt{
                font-size:1.15rem;
                font-weight:800;
                color: var(--text);
                margin:0 0 14px;
                line-height:1.5;
            }

            .post-body{font-size:1.02rem; line-height:1.9; color:var(--text);}
            .post-body img{border-radius:12px; margin:12px 0;}

            .related-wrap{
                margin-top:16px;
                background: rgba(255,255,255,0.7);
                border: 1px solid rgba(229,231,235,1);
                box-shadow: 0 10px 30px rgba(0,0,0,.06);
                border-radius: var(--radius);
                padding:16px;
            }
            .related-title{font-size:1.1rem; font-weight:900; margin-bottom:12px;}

            .related-list{display:flex; flex-direction:column; gap:10px;}
            .related-item{display:grid; grid-template-columns: 64px 1fr; gap:12px; align-items:center; padding:10px; border-radius:14px; border:1px solid rgba(0,0,0,.06); background: rgba(255,255,255,.82);}
            .related-item:hover{transform: translateY(-2px); transition: var(--transition);}

            .related-thumb{width:64px; height:48px; border-radius:12px; overflow:hidden; background:#f1f5f9;}
            .related-thumb img{width:100%; height:100%; object-fit:cover;}
            .related-thumb-placeholder{width:100%; height:100%;}

            .related-meta{font-size:.82rem; color: var(--text-light); font-weight:800;}
            .related-text{font-size:.95rem; font-weight:900; line-height:1.25; color: var(--text); display:-webkit-box; -webkit-line-clamp:2; -webkit-box-orient:vertical; overflow:hidden;}

            .related-empty{color: var(--text-light); font-weight:700; font-size:.95rem; padding:8px 0;}

            @media (min-width: 900px){
                .post-layout{grid-template-columns: 340px 1fr;}
                .post-aside{position:sticky; top:110px;}
            }
        </style>

    </div>
</section>

@endsection

