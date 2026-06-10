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

Route::get('/impact', function () {
    return view('pages.impact');
});

use App\Http\Controllers\Public\BlogPageController;
use App\Http\Controllers\Public\ContactController;
use App\Http\Controllers\Public\EventsPageController;
use App\Http\Controllers\Public\VolunteerController;

Route::get('/events', [EventsPageController::class, 'index']);
Route::get('/blog', [BlogPageController::class, 'index']);
Route::get('/blog/{post}', [BlogPageController::class, 'show']);


Route::get('/contact', function () {
    return view('pages.contact');
});
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/get-involved', function () {
    return view('pages.get-involved');
});
Route::post('/get-involved', [VolunteerController::class, 'store'])->name('get-involved.store');

Route::get('/donate', function () {
    return view('pages.donate');
});

Route::fallback(function () {
    return response()->view('pages.404', [], 404);
});

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

// Admin
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

