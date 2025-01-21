@extends('layouts.main')

@section('title', 'Login to quotes website')
@section('content')
    <h1>Login Form</h1>
    <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" />
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" value="{{ old('password') }}" />
        </div>
        <div>
            <button type="submit">Login to website</button>
        </div>

    </form>

@endsection
