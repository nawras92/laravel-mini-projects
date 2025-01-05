<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
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
    /* dd($request->input('quote-text'), $request->input('quote-author')); */
    $request->validate(
      [
        'quote-text' => 'required|string|max:500',
        'quote-author' => 'required|string|max:150',
      ],
      [
        'quote-text.required' =>
          'The quote text is required and cannot be empty.',
        'quote-text.string' => 'The quote text must be a valid string',
        'quote-text.max' => 'The quote text cannot be longer than 500 chars.',
        'quote-author.max' =>
          'The quote author cannot be longer than 150 chars.',
      ],
    );

    //insert into
    Quotes::create([
      'quote' => $request->input('quote-text'),
      'author' => $request->input('quote-author'),
    ]);

    return redirect()
      ->back()
      ->with('success', 'Quote Saved Successfully!');
  }
}
