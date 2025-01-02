@extends('layouts.main')

@section('title', 'Add a new quote')
@section('content')
    <h1>Add new QUote</h1>

    <form action="/quotes" method="POST">
        @csrf
        <div>
            <label for="quote-text">Quote Text</label>
            <textarea id="quote-text" name="quote-text" cols="30" rows="10" required></textarea>
        </div>
        <div>
            <label for="quote-author">Quote Author</label>
            <input id="quote-author" name="quote-author" required />
        </div>
        <div>
            <button type="submit">Add Quote</button>
        </div>

    </form>

@endsection
