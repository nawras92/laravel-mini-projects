@extends('layouts.main')

@section('title', 'Add a new quote')
@section('content')
    @include('partials.page-header', [
        'pageTitle' => 'Add New Quote',
        'pageDesc' => 'You can edit your quote here',
    ])

    <form class="form" action="/quotes" method="POST">
        @csrf
        <div class="form-group">
            <label class="label" for="quote-text">Quote Text</label>
            <textarea class="textarea" id="quote-text" name="quote-text" cols="30" rows="10">{{ old('quote-text') }}</textarea>
        </div>
        {{-- <div class="form-group"> --}}
        {{--     <label class="label" for="quote-author">Quote Author</label> --}}
        {{--     <input class="input" id="quote-author" name="quote-author" value="{{ old('quote-author') }}" /> --}}
        {{-- </div> --}}
        <div class="form-group">
            <button class="button button-submit" type="submit">Add Quote</button>
        </div>

    </form>

@endsection
