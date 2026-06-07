@extends('layouts.app')

@section('title','Page Not Found | Great Africa')

@section('content')
<section class="section" aria-labelledby="notfound-title">
  <h1 class="section-title" id="notfound-title">Page not found</h1>
  <p class="section-lead" style="max-width:70ch;">The page you’re looking for doesn’t exist (yet). Use the navigation to continue.</p>
  <div class="form-actions" style="margin-top:16px;">
    <a class="btn btn-primary" href="/">Go to Home</a>
    <a class="btn btn-secondary" href="/contact">Contact us</a>
  </div>
</section>
@endsection

