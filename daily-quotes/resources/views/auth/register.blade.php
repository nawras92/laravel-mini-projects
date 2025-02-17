@extends('layouts.main')

@section('title', 'Create Account')
@section('content')
    @include('partials.page-header', [
        'pageTitle' => 'Register Form',
        'pageDesc' => 'Sign up with our team',
    ])
    <form class="form" action="{{ route('register.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="label" for="name">Name</label>
            <input class="input" type="name" id="name" name="name" value="{{ old('name') }}" />
        </div>
        <div class="form-group">
            <label class="label" for="email">Email</label>
            <input class="input" type="email" id="email" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form-group">
            <label class="label" for="password">Password</label>
            <input class="input" type="password" id="password" name="password" value="{{ old('password') }}" />
        </div>
        <div class="form-group">
            <label class="label" for="password_confirmation">Confirm Password</label>
            <input class="input" type="password" id="password_confirmation" name="password_confirmation"
                value="{{ old('password_confirmation') }}" />
        </div>
        <div class="form-group">
            <button class="button button-submit" type="submit">Register</button>
        </div>

    </form>

@endsection
