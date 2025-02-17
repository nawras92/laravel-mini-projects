@extends('layouts.main')

@php
    $wordsArr = explode(' ', $singleQuote['quote']);
    $first3WordsArr = array_slice($wordsArr, 0, 3);
    $first3Words = implode(' ', $first3WordsArr) . ' ....';
@endphp

@section('title', $first3Words)

@section('content')
    @include('partials.page-header', [
        'pageTitle' => $singleQuote['quote'],
        'pageDesc' => $singleQuote['author'],
    ])

@endsection
