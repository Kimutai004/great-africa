@extends('layouts.app')

@section('title', 'Privacy Policy — Great Africa')

@section('content')
<section class="page-hero">
    <div class="container">
        <p class="eyebrow"><span class="num">Legal</span> Privacy</p>
        <h1 class="h1">Privacy policy</h1>
        <p class="page-crumbs"><a href="/">Home</a> · Privacy</p>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width:820px;">
        <div class="article-body">
            <p class="article-excerpt">
                This is a template privacy policy. Have it reviewed by a legal
                professional before publishing, and replace the placeholders
                with your actual practices.
            </p>

            <h2>What we collect</h2>
            <p>When you contact us, volunteer, or subscribe to our newsletter, we collect the information you provide: name, email address, phone number, location, and the content of your message.</p>

            <h2>How we use it</h2>
            <ul>
                <li>To respond to your enquiry or volunteer application</li>
                <li>To send newsletter updates you subscribed to</li>
                <li>To maintain records required for our programmes and donor reporting</li>
            </ul>

            <h2>Who we share it with</h2>
            <p>We do not sell or rent personal data. We share information only with service providers who help us operate (for example, email delivery) and where required by law.</p>

            <h2>Your rights</h2>
            <p>You can ask us to access, correct, or delete your personal data at any time. Write to us at <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>.</p>

            <h2>Data retention</h2>
            <p>We keep personal data only as long as needed for the purposes above or as required by law.</p>

            <h2>Changes to this policy</h2>
            <p>We may update this policy periodically. The latest version will always be published on this page.</p>

            <h2>Contact</h2>
            <p>Questions about this policy: <a href="mailto:{{ config('site.email') }}">{{ config('site.email') }}</a>, {{ config('site.location') }}.</p>
        </div>
    </div>
</section>
@endsection
