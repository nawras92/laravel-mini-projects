<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotesController;

//*** QUotes
Route::get('/quotes', [QuotesController::class, 'index']);
Route::get('/quotes/create', [QuotesController::class, 'create'])->middleware(
  'auth',
);
//** Single Quote
Route::get('/quotes/{quoteId}', [QuotesController::class, 'show']);
Route::post('/quotes', [QuotesController::class, 'store'])->middleware('auth');
Route::get('/random', [QuotesController::class, 'randomQuote']);
// Edit Route
Route::get('/quotes/{quoteId}/edit', [
  QuotesController::class,
  'edit',
])->middleware('auth');
Route::put('/quotes/{quoteId}', [
  QuotesController::class,
  'update',
])->middleware('auth');
// Delete Route
Route::delete('/quotes/{quoteId}', [
  QuotesController::class,
  'destroy',
])->middleware('auth');

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name(
  'register',
);
Route::post('/register', [AuthController::class, 'register'])->name(
  'register.submit',
);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', function () {
  return view('auth.dashboard');
})
  ->name('dashboard')
  ->middleware('auth');

Route::get('/', function () {
  return view('welcome');
});

Route::get('/about', function () {
  return view('about');
});
