@extends('layouts.main')

@section('title', 'Home Page')
@section('content')
    @include('partials.page-header', [
        'pageTitle' => 'Quotes',
        'pageDesc' => 'Here you are your fav quotes. Get inspired!',
    ])

    <div class="container">
        <div class="inner-container">
            <div class="cards">
                @foreach ($quotes as $quote)
                    <div class="card">
                        <div class="card-body">{{ $quote->quote }} </div>
                        <div class="card-meta"> {{ $quote['author'] }}</div>
                        <div class="card-actions">
                            <a class="button button-view" href="/quotes/{{ $quote->id }}">View</a>
                            @auth
                                <a class="button button-edit" href="/quotes/{{ $quote['id'] }}/edit">Edit</a>
                                @include('delete')
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

@endsection
