@extends('layouts.main')

@section('title', 'Create Account')
@section('content')
    <h1>Register Form</h1>
    <form action="{{ route('register.submit') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="name" id="name" name="name" value="{{ old('name') }}" />
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" />
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" name="password" value="{{ old('password') }}" />
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" />
        </div>
        <div>
            <button type="submit">Register</button>
        </div>

    </form>

@endsection
