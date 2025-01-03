<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuotesController;

//*** QUotes
Route::get('/quotes', [QuotesController::class, 'showAll']);
//** Single Quote
Route::get('/quotes/{quoteId}', [QuotesController::class, 'getOne']);
Route::get('/random', [QuotesController::class, 'randomQuote']);
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
Route::post('/quotes', function () {
  return response()->json(
    [
      'data' => 'added',
    ],
    200,
  );
});

Route::delete('/quotes/{quoteId}', function ($quoteId) {
  return response()->json(
    [
      'data' => 'deleted',
      'id' => $quoteId,
    ],
    200,
  );
});
Route::put('/quotes/{quoteId}', function ($quoteId) {
  return response()->json(
    [
      'data' => 'edited',
      'id' => $quoteId,
    ],
    200,
  );
});

Route::get('/', function () {
  return view('welcome');
});
