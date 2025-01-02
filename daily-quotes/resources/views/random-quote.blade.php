<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote</title>
</head>

<body>
    <h1>#{{ $randomQuote['id'] }} - {{ $randomQuote['quote'] }} </h1>
    <p>{{ $randomQuote['author'] }}</p>
    <a href="/quotes/"> Go Back to quotes</a>
</body>

</html>
