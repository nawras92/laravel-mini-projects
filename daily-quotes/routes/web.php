<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotesController;

//*** QUotes
Route::get('/quotes', [QuotesController::class, 'index']);
Route::get('/quotes/create', [QuotesController::class, 'create']);
//** Single Quote
Route::get('/quotes/{quoteId}', [QuotesController::class, 'show']);
Route::post('/quotes', [QuotesController::class, 'store']);
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

/* Route::get('/quotes', function () { */
/*   require 'data/quotes.php'; */
/*   $output = '<div>'; */
/*   $output .= '<h1>Quotes website</h1>'; */
/*   $output .= '<hr>'; */
/*   $output .= '<ul>'; */
/*   foreach ($quotes as $quote) { */
/*     $output .= '<li>'; */
/*     $output .= '<a href="' . 'quotes/' . $quote['id'] . '">'; */
/*     $output .= $quote['quote']; */
/*     $output .= '  - '; */
/*     $output .= '<span style="color: gray">'; */
/*     $output .= $quote['author']; */
/*     $output .= '</span>'; */
/*     $output .= '</a>'; */
/*     $output .= '</li>'; */
/*   } */
/*   $output .= '</ul>'; */

/*   $output .= '</div>'; */
/*   return $output; */
/* }); */

/* Route::get('/quotes/{quoteId}', function ($quoteId) { */
/*   require 'data/quotes.php'; */
/*   $foundQuote = ''; */
/*   foreach ($quotes as $quote) { */
/*     if ($quote['id'] == $quoteId) { */
/*       $foundQuote = $quote; */
/*       break; */
/*     } */
/*   } */
/*   if (empty($foundQuote)) { */
/*     abort(404); */
/*   } else { */
/*     $output = '<div>'; */
/*     $output .= '<h1>'; */
/*     $output .= $foundQuote['quote']; */
/*     $output .= '</h1>'; */
/*     $output .= '<a href="' . '/quotes' . '">'; */
/*     $output .= 'Go back to quotes'; */
/*     $output .= '</a>'; */
/*     $output .= '</div>'; */
/*     return $output; */
/*   } */
/* }); */

//**  Add Quote
/* Route::post('/quotes', function () { */
/*   return response()->json( */
/*     [ */
/*       'data' => 'added', */
/*     ], */
/*     200, */
/*   ); */
/* }); */

/* Route::delete('/quotes/{quoteId}', function ($quoteId) { */
/*   return response()->json( */
/*     [ */
/*       'data' => 'deleted', */
/*       'id' => $quoteId, */
/*     ], */
/*     200, */
/*   ); */
/* }); */
/* Route::put('/quotes/{quoteId}', function ($quoteId) { */
/*   return response()->json( */
/*     [ */
/*       'data' => 'edited', */
/*       'id' => $quoteId, */
/*     ], */
/*     200, */
/*   ); */
/* }); */

Route::get('/', function () {
  return view('welcome');
});
