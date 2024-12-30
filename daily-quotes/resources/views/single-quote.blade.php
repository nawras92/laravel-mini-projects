<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $singleQuote['quote'] }}</title>
</head>

<body>
    <h1>#{{ $singleQuote['id'] }} - {{ $singleQuote['quote'] }}</h1>
    <p> {{ $singleQuote['author'] }}</p>
    <p> <a href="/quotes">Go back to quotes</a></p>

</body>

</html>
