@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')
    @include('partials.page-header', [
        'pageTitle' => 'Welcome ' . auth()->user()->name,
        'pageDesc' => 'You are logged In!',
    ])
@endsection
