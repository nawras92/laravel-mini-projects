@extends('layouts.main')

@section('title', 'Home Page')
@section('content')
    <h1>Quotes</h1>
    <p>
        <a href="/random"> Get a random Quote</a>

    </p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Quote</th>
                <th>Author</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

        </thead>
        @foreach ($quotes as $quote)
            <tr>
                <td><a href="/quotes/{{ $quote['id'] }}">{{ $quote['id'] }}</a></td>
                <td>{{ $quote['quote'] }} </td>
                <td> {{ $quote['author'] }} </td>
                <td><a href="/quotes/{{ $quote['id'] }}/edit">Edit</a></td>
                <td><a href="/quotes/{{ $quote['id'] }}/delete">X</a></td>
            </tr>
        @endforeach
    </table>
@endsection
