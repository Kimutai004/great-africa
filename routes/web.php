<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/programs', function () {
    return view('pages.programs');
});

Route::get('/get-involved', function () {
    return view('pages.get-involved');
});

Route::get('/impact', function () {
    return view('pages.impact');
});

Route::get('/events', function () {
    return view('pages.events');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/donate', function () {
    return view('pages.donate');
});

Route::fallback(function () {
    return response()->view('pages.404', [], 404);
});

