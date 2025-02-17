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
                @auth
                    <th>Edit</th>
                    <th>Delete</th>
                @endauth
            </tr>

        </thead>
        @foreach ($quotes as $quote)
            <tr>
                <td><a href="/quotes/{{ $quote->id }}">{{ $quote->id }}</a></td>
                <td>{{ $quote->quote }} </td>
                <td> {{ $quote['author'] }} </td>
                @auth
                    <td><a href="/quotes/{{ $quote['id'] }}/edit">Edit</a></td>
                    <td>@include('delete')</td>
                @endauth
            </tr>
        @endforeach
    </table>
@endsection
