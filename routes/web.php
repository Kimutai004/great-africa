<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Public\BlogPageController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\EventsPageController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\NewsletterController;
use App\Http\Controllers\Public\VolunteerController;

/* ---------- Public site ---------- */

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::view('/about', 'pages.about')->name('about');
Route::view('/programs', 'pages.programs')->name('programs');
Route::view('/impact', 'pages.impact')->name('impact');

Route::get('/events', [EventsPageController::class, 'index'])->name('events');
Route::get('/blog', [BlogPageController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [BlogPageController::class, 'show'])->name('blog.show');

Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::view('/get-involved', 'pages.get-involved')->name('get-involved');
Route::post('/get-involved', [VolunteerController::class, 'store'])->name('get-involved.store');

Route::view('/donate', 'pages.donate')->name('donate');

Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');

Route::view('/privacy', 'pages.privacy')->name('privacy');
Route::view('/terms', 'pages.terms')->name('terms');

Route::fallback(function () {
    return response()->view('pages.404', [], 404);
});

/* ---------- Admin ---------- */

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::post('/logout', function () {
    auth()->logout();
    return redirect('/admin/login');
})->name('logout');

// Events CRUD
Route::resource('admin/events', \App\Http\Controllers\Admin\EventsController::class);

// Posts CRUD
Route::resource('admin/posts', \App\Http\Controllers\Admin\PostsController::class);

// Contact messages (list + delete)
Route::get('/admin/contact-messages', [\App\Http\Controllers\Admin\ContactMessagesController::class, 'index'])->name('admin.contact-messages.index');
Route::delete('/admin/contact-messages/{contactMessage}', [\App\Http\Controllers\Admin\ContactMessagesController::class, 'destroy'])->name('admin.contact-messages.destroy');

// Volunteer requests (list + delete)
Route::get('/admin/volunteer-requests', [\App\Http\Controllers\Admin\VolunteerRequestsController::class, 'index'])->name('admin.volunteer-requests.index');
Route::delete('/admin/volunteer-requests/{volunteerRequest}', [\App\Http\Controllers\Admin\VolunteerRequestsController::class, 'destroy'])->name('admin.volunteer-requests.destroy');

// Newsletter subscribers (list + delete)
Route::get('/admin/newsletter', [\App\Http\Controllers\Admin\NewsletterSubscribersController::class, 'index'])->name('admin.newsletter.index');
Route::delete('/admin/newsletter/{newsletterSubscriber}', [\App\Http\Controllers\Admin\NewsletterSubscribersController::class, 'destroy'])->name('admin.newsletter.destroy');

