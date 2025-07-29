<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\SiteSettingController;
use App\Http\Controllers\DonationController;

// login page
Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserController::class, 'login']);
//home
Route::get('/', [WebController::class, 'home'])->name('home');
//student
Route::get('/students', [WebController::class, 'student'])->name('student');
//news
Route::get('/news', [WebController::class, 'news'])->name('news');
//single news
Route::get('/news/{encodedId}', [WebController::class, 'newsDetails'])->name('newsDetails');

//contact form send
Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');
//account view
Route::get('/account', [WebController::class, 'account'])->name('account');
//registration view
Route::get('/registrationList', [WebController::class, 'registration'])->name('registration');
//sponser view
Route::get('/sponser', [WebController::class, 'sponser'])->name('sponser');
//donation view

Route::get('/donation', [WebController::class, 'donation'])->name('donation');

// admin routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/studentList', [RegistrationController::class, 'index'])->name('students');
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
    // news categories and news management   
    Route::resource('news_categories', BlogCategoryController::class)
        ->parameters(['news_categories' => 'category'])
        ->except(['show']);

    // Add your activate/deactivate routes here, example:
    Route::get('categories/{category}/activate', [BlogCategoryController::class, 'activate'])->name('categories.activate');
    Route::get('categories/{category}/deactivate', [BlogCategoryController::class, 'deactivate'])->name('categories.deactivate');
    Route::resource('blogs', BlogController::class);
    Route::put('/registration/update-status/{id}', [RegistrationController::class, 'updateStatus'])->name('registration.updateStatus');
    Route::resource('sponsors', SponsorController::class);
    // registration resource
    Route::resource('registration', RegistrationController::class);
    Route::post('/tokens/update-status/{tokenCode}', [RegistrationController::class, 'updateTokenStatus'])->name('tokens.updateStatus');


    Route::get('/tokens/by-registration/{id}', [RegistrationController::class, 'getTokensByRegistration']);



    // site settings
    Route::get('site-settings/edit', [SiteSettingController::class, 'edit'])->name('site-settings.edit');
    Route::put('site-settings/update', [SiteSettingController::class, 'update'])->name('site-settings.update');
    Route::get('hero-section/edit', [SiteSettingController::class, 'heroEdit'])->name('hero-section.edit');
    Route::put('hero-section/update', [SiteSettingController::class, 'heroUpdate'])->name('hero-section.update');

    // donation routes
    Route::get('/donate', [DonationController::class, 'create'])->name('donate.create');
    Route::get('/donations', [DonationController::class, 'index'])->name('donate.index'); // for admin view
    Route::put('/donations/{id}/status', [DonationController::class, 'updateStatus'])->name('donations.updateStatus');


});



Route::get('blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');
Route::post('store/student', [RegistrationController::class, 'store'])->name('registration.store');
Route::post('/donate', [DonationController::class, 'store'])->name('donate.store');

// npx tailwindcss -i ./public/assets/css/tailwind.css -o ./public/assets/css/tailwind.output.css --watch
