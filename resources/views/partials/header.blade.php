<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <div class="col-12 text-center mt-4">
            <a href="{{ Route('comics.index') }}" class="btn btn-dark">Home Page</a>
            <a href="{{ Route('comics.create') }}" class="btn btn-dark">Create</a>
        </div>
    </header>

</body>

</html>