@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')
    <h1>Dashboard, welcome, {{ auth()->user()->name }}</h1>
    <p>You are logged In</p>
    <a href="{{ route('logout') }}">Logout</a>

@endsection
