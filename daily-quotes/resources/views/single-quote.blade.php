@extends('layouts.main')

@php
    $wordsArr = explode(' ', $singleQuote['quote']);
    $first3WordsArr = array_slice($wordsArr, 0, 3);
    $first3Words = implode(' ', $first3WordsArr) . ' ....';
@endphp

@section('title', $first3Words)

@section('content')
    <h1>#{{ $singleQuote['id'] }} - {{ $singleQuote['quote'] }}</h1>
    <p> {{ $singleQuote['author'] }}</p>
    <p> <a href="/quotes">Go back to quotes</a></p>
@endsection
