@extends('layouts.main')

@section('title', 'Add a new quote')
@section('content')
    <h1>Add new QUote</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/quotes" method="POST">
        @csrf
        <div>
            <label for="quote-text">Quote Text</label>
            <textarea id="quote-text" name="quote-text" cols="30" rows="10">{{ old('quote-text') }}</textarea>
        </div>
        <div>
            <label for="quote-author">Quote Author</label>
            <input id="quote-author" name="quote-author" value="{{ old('quote-author') }}" />
        </div>
        <div>
            <button type="submit">Add Quote</button>
        </div>

    </form>

@endsection
