<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])
    ->name('home');

Route::get('/terms', [HomeController::class, 'terms'])
    ->name('terms');

Route::get('/book_appointment', [HomeController::class, 'bookAppointment'])
    ->name('book.appointment');

Route::get('/contact_us', [HomeController::class, 'contactUs'])
    ->name('contact.us');

Route::get('/privacy', [HomeController::class, 'privacy'])
    ->name('privacy');

Route::get('/about', [HomeController::class, 'about'])
    ->name('about');

Route::get('/blogs', [HomeController::class, 'blogs'])
    ->name('blogs');

Route::get('/blog/{id}', [HomeController::class, 'singleBlog'])
    ->name('single-blog');

Route::get('/services', [HomeController::class, 'services'])
    ->name('services');

Route::get('/service/{id}', [HomeController::class, 'singleService'])
    ->name('single-service');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->middleware('auth')
    ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware('auth');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'App\Http\Controllers'], function () {
    Route::get('homepage', 'Miscellaneous@homepage')->name('homepage.edit');
    Route::get('about', 'Miscellaneous@about')->name('admin.about');
    Route::get('terms', 'Miscellaneous@terms')->name('admin.terms');
    Route::get('privacy', 'Miscellaneous@privacy')->name('admin.privacy');
    Route::get('contacted_us', 'Miscellaneous@contactedUs')->name('contacted.us');
    Route::get('booked_appointment', 'Miscellaneous@bookedAppointment')->name('booked.appointment');
    Route::get('keywords', 'Miscellaneous@keywords')->name('keywords');
    Route::resource('blog', 'BlogController');
    Route::resource('review', 'ReviewController');
    Route::resource('service', 'ServiceController');
    Route::resource('static-option', 'StaticOptionController');
    Route::post('image_upload', 'Miscellaneous@image_upload')->name('ckeditor.upload');
    Route::get('gen-sitemap', 'Miscellaneous@genSitemap')->name('sitemap.gen');
});
