<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotesController extends Controller
{
  public function showAll()
  {
    return 'all quotes';
  }

  public function randomQuote()
  {
    return 'random';
  }
}
