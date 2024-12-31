<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My quotes website')</title>
    <link rel="stylesheet" href="{{ asset('css/quotes.css') }}">
</head>

<body>
    @include('partials.header')
    @yield('content')

    @include('partials.footer')
    <script src="{{ asset('js/quotes.js') }}"></script>
</body>

</html>
