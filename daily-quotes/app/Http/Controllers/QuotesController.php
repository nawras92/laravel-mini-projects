<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuotesController extends Controller
{
  // Get all quotes
  public function index()
  {
    /* return 'all quotes'; */
    /* require 'data/quotes.php'; */
    /* $quotes = Quotes::all(); */
    $quotes = Quotes::orderBy('updated_at', 'desc')->get();
    return view('quotes', ['quotes' => $quotes]);
  }
  // Get single quote
  public function show($quoteId)
  {
    $singleQuote = Quotes::find($quoteId);
    /* return 'all quotes'; */
    /* require 'data/quotes.php'; */
    /* $singleQuote = null; */
    /* foreach ($quotes as $quote) { */
    /*   if ($quote['id'] == $quoteId) { */
    /*     $singleQuote = $quote; */
    /*     break; */
    /*   } */
    /* } */
    if (!$singleQuote) {
      abort(404);
    }
    return view('single-quote', ['singleQuote' => $singleQuote]);
  }

  public function randomQuote()
  {
    /* require 'data/quotes.php'; */
    /* $randomKey = array_rand($quotes); */
    /* $randomQuote = $quotes[$randomKey]; */
    /* $randomQuote = Quotes::inRandomOrder()->first(); */
    $randomQuote = Quotes::getRandomQuote();

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
      ],
      [
        'quote-text.required' =>
          'The quote text is required and cannot be empty.',
        'quote-text.string' => 'The quote text must be a valid string',
        'quote-text.max' => 'The quote text cannot be longer than 500 chars.',
      ],
    );

    //insert into
    Quotes::create([
      'quote' => $request->input('quote-text'),
      'author' => Auth::user()->name,
      'user_id' => Auth::id(),
    ]);

    return redirect()
      ->back()
      ->with('success', 'Quote Saved Successfully!');
  }
  // Edit Form
  public function edit($quoteId)
  {
    $quote = Quotes::find($quoteId);
    if (!$quote) {
      abort(404);
    }
    return view('edit', ['quote' => $quote]);
  }
  // Update process
  public function update(Request $request, $quoteId)
  {
    // Find Quote
    /* $quoteId = 500; */
    $quote = Quotes::find($quoteId);
    if (!$quote) {
      return redirect()
        ->back()
        ->withErrors(['quote_id' => 'Quote not found']);
    }

    if (Auth::id() !== $quote->user_id) {
      abort(403, 'You can not edit a quote you have not written');
    }
    /* dd($request->input('quote-text'), $request->input('quote-author')); */
    $validated = $request->validate(
      [
        'quote-text' => 'required|string|max:500',
      ],
      [
        'quote-text.required' =>
          'The quote text is required and cannot be empty.',
        'quote-text.string' => 'The quote text must be a valid string',
        'quote-text.max' => 'The quote text cannot be longer than 500 chars.',
      ],
    );

    $quote->quote = $validated['quote-text'];
    $quote->save();

    return redirect()
      ->to('/quotes/' . $quoteId . '/edit')
      ->with('success', 'Quote Updated Successfully!');
  }
  // Destroy/ delete quote
  public function destroy($quoteId)
  {
    $quote = Quotes::find($quoteId);
    if (!$quote) {
      return redirect()
        ->back()
        ->withErrors(['quote_id' => 'Quote not found']);
    }
    if (Auth::id() !== $quote->user_id) {
      abort(403, 'You can not delete a quote you have not written');
    }

    $quote->delete();

    return redirect()
      ->to('/quotes/')
      ->with('success', 'Quote Deleted Successfully!');
  }
}
