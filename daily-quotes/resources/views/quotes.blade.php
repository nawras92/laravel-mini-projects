<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ALl Quotes</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px
        }
    </style>
</head>

<body>
    <h1>Quotes</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Quote</th>
                <th>Author</th>
            </tr>

        </thead>
        @foreach ($quotes as $quote)
            <tr>
                <td>{{ $quote['id'] }}</td>
                <td>{{ $quote['quote'] }} </td>
                <td> {{ $quote['author'] }} </td>
            </tr>
        @endforeach
    </table>

</body>

</html>
