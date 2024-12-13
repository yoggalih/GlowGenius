<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\SkincareController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\DashboardController;
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('home');
// Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
// Route::post('/register', [RegisteredUserController::class, 'store']);
// Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
// Route::post('/login', [AuthenticatedSessionController::class, 'store']);
// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
// Route::get('/skincare/recommendations', [SkincareController::class, 'index'])->middleware('auth')->name('skincare.recommendations');
// Route::post('/skincare/store', [SkincareController::class, 'store'])->middleware('auth')->name('skincare.store');

// Route::get('/feedback', [FeedbackController::class, 'index'])->middleware('auth')->name('feedback');
// Route::post('/feedback/store', [FeedbackController::class, 'store'])->middleware('auth')->name('feedback.store');
// Route::get('/feedback/results', [FeedbackController::class, 'results'])->middleware('auth')->name('feedback.results');

Route::get('/', function () {
    return view('register');
});

// Route::get('/login', function () {
//     return view('login');
// });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// });


// Route::get('/recommendations', function () {
//     return view('recommendations');
// });


// Route::get('/register', function () {
//     return view('register');
// });


// Route::get('/feedback', function () {
//     return view('feedback');
// });

// Halaman utama dan autentikasi
//Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('register'); // Halaman login sebagai default
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register'); // Halaman register
Route::post('/register', [RegisteredUserController::class, 'store']); // Proses register
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login'); // Halaman login
Route::post('/login', [AuthenticatedSessionController::class, 'store']); // Proses login

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout'); // Proses logout


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Skincare Recommendations
Route::get('/skincare/recommendations', [SkincareController::class, 'index'])->middleware('auth')->name('skincare.recommendations');
Route::post('/skincare/store', [SkincareController::class, 'store'])->middleware('auth')->name('skincare.store');

// Feedback
Route::get('/feedback', [FeedbackController::class, 'index'])->middleware('auth')->name('feedback');
Route::post('/feedback/store', [FeedbackController::class, 'store'])->middleware('auth')->name('feedback.store');
Route::get('/feedback/results', [FeedbackController::class, 'results'])->middleware('auth')->name('feedback.results');
