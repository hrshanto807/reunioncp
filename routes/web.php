<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegistrationController;


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
// Route::get('/news-details', [WebController::class, 'newsDetails'])->name('newsDetails');
Route::get('/news-details/1', [WebController::class, 'newsDetails1'])->name('newsDetails1');
Route::get('/news-details/2', [WebController::class, 'newsDetails2'])->name('newsDetails2');
Route::get('/news-details/3', [WebController::class, 'newsDetails3'])->name('newsDetails3');

//account view
Route::get('/account', [WebController::class, 'account'])->name('account');
//registration view
Route::get('/registrationList', [WebController::class, 'registration'])->name('registration');
//sponser view
Route::get('/sponser', [WebController::class, 'sponser'])->name('sponser');
//donation view
Route::get('/donation', [WebController::class, 'donation'])->name('donation');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/studentList', [StudentController::class, 'index'])->name('students');
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});


// registration resource
Route::resource('registration', RegistrationController::class);



Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');


