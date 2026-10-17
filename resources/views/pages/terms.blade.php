@extends('layouts.app')

@section('title', 'Terms of Use — Great Africa')

@section('content')
<section class="page-hero">
    <div class="container">
        <p class="eyebrow"><span class="num">Legal</span> Terms</p>
        <h1 class="h1">Terms of use</h1>
        <p class="page-crumbs"><a href="/">Home</a> · Terms</p>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width:820px;">
        <div class="article-body">
            <p class="article-excerpt">
                This is a template terms-of-use page. Have it reviewed by a
                legal professional before publishing.
            </p>

            <h2>Use of this site</h2>
            <p>By using this website you agree to these terms. If you do not agree, please do not use the site.</p>

            <h2>Content</h2>
            <p>Content on this site is provided for general information. We work to keep it accurate, but we do not guarantee completeness or accuracy, and we may update or remove content at any time.</p>

            <h2>Intellectual property</h2>
            <p>Unless otherwise stated, site content — text, logos, and programme materials — belongs to Great Africa. You may share our content with attribution for non-commercial purposes.</p>

            <h2>Donations</h2>
            <p>Donation instructions published on this site reflect our current payment arrangements. Contact us before transferring funds if anything is unclear, and keep your transaction reference for your records.</p>

            <h2>External links</h2>
            <p>We may link to third-party sites. We are not responsible for their content or privacy practices.</p>

            <h2>Liability</h2>
            <p>To the fullest extent permitted by law, Great Africa is not liable for damages arising from use of this site.</p>

            <h2>Contact</h2>
            <p>Questions about these terms: <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>, {{ config('site.location') }}.</p>
        </div>
    </div>
</section>
@endsection
