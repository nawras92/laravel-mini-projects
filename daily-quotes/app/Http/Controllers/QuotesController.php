<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotesController extends Controller
{
  public function showAll()
  {
    /* return 'all quotes'; */
    require 'data/quotes.php';
    return view('quotes', ['quotes' => $quotes]);
  }

  public function randomQuote()
  {
    return 'random';
  }
}
