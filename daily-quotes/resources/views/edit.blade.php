@extends('layouts.main')

@section('title', 'edit quote')
@section('content')
    <h1>Edit Quote</h1>

    {{-- @if ($errors->any()) --}}
    {{--     <div class="alert alert-danger"> --}}
    {{--         <ul> --}}
    {{--             @foreach ($errors->all() as $error) --}}
    {{--                 <li>{{ $error }}</li> --}}
    {{--             @endforeach --}}
    {{--         </ul> --}}
    {{--     </div> --}}
    {{-- @endif --}}
    {{-- @if (session('success')) --}}
    {{--     <div class="alert alert-success"> --}}
    {{--         {{ session('success') }} --}}
    {{--     </div> --}}
    {{-- @endif --}}

    <form action="/quotes/{{ $quote->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="quote-text">Quote Text</label>
            <textarea id="quote-text" name="quote-text" cols="30" rows="10">{{ $quote->quote }}</textarea>
        </div>
        <div>
            <label for="quote-author">Quote Author</label>
            <input id="quote-author" name="quote-author" value="{{ $quote->author }}" />
        </div>
        <div>
            <button type="submit">Update Quote</button>
        </div>

    </form>

@endsection
