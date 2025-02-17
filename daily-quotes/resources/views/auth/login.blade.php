@extends('layouts.main')

@section('title', 'Login to quotes website')
@section('content')
    @include('partials.page-header', [
        'pageTitle' => 'Login Form',
        'pageDesc' => 'You can log in to the website here',
    ])
    <form class="form" action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="label" for="email">Email</label>
            <input class="input" type="email" id="email" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form-group">
            <label class="label" for="password">Password</label>
            <input type="password" class="input" id="password" name="password" value="{{ old('password') }}" />
        </div>
        <div class="form-group">
            <button class="button button-submit" type="submit">Login to website</button>
        </div>

    </form>

@endsection
