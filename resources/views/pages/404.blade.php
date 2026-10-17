@extends('layouts.app')

@section('title', 'Page Not Found — Great Africa')

@section('content')
<section class="container notfound" aria-labelledby="notfound-title">
    <p class="notfound-code" aria-hidden="true">404</p>
    <h1 class="h1" id="notfound-title" style="margin-top:1.5rem;">This page went off the map.</h1>
    <p class="lead">
        The page you are looking for does not exist — or moved without telling us.
    </p>
    <div class="hero-ctas" style="justify-content:center;">
        <a class="btn btn-green" href="/">Back to home</a>
        <a class="btn" href="/contact">Contact us</a>
    </div>
</section>
@endsection

