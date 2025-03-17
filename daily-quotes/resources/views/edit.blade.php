@extends('layouts.main')

@section('title', 'edit quote')
@section('content')
    @include('partials.page-header', [
        'pageTitle' => 'Edit Quote',
        'pageDesc' => 'Here you can edit your quote',
    ])

    <form class="form" action="/quotes/{{ $quote->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="label" for="quote-text">Quote Text</label>
            <textarea class="textarea " id="quote-text" name="quote-text" cols="30" rows="10">{{ $quote->quote }}</textarea>
        </div>
        {{-- <div class="form-group"> --}}
        {{--     <label class="label" for="quote-author">Quote Author</label> --}}
        {{--     <input class="input" id="quote-author" name="quote-author" value="{{ $quote->author }}" /> --}}
        {{-- </div> --}}
        <div class="form-group">
            <button class="button button-submit" type="submit">Update Quote</button>
        </div>

    </form>

@endsection
