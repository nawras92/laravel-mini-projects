<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotesController extends Controller
{
  // Get all quotes
  public function index()
  {
    /* return 'all quotes'; */
    require 'data/quotes.php';
    return view('quotes', ['quotes' => $quotes]);
  }
  // Get single quote
  public function show($quoteId)
  {
    /* return 'all quotes'; */
    require 'data/quotes.php';
    $singleQuote = null;
    foreach ($quotes as $quote) {
      if ($quote['id'] == $quoteId) {
        $singleQuote = $quote;
        break;
      }
    }
    if (!$singleQuote) {
      abort(404);
    }
    return view('single-quote', ['singleQuote' => $singleQuote]);
  }

  public function randomQuote()
  {
    require 'data/quotes.php';
    $randomKey = array_rand($quotes);
    $randomQuote = $quotes[$randomKey];

    return view('single-quote', ['singleQuote' => $randomQuote]);
  }

  // Create Quote Form
  public function create()
  {
    return view('create');
  }
  //Store quote in the db
  public function store(Request $request)
  {
    dd($request->input('quote-text'), $request->input('quote-author'));
  }
}
