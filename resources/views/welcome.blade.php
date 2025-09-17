<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Archive</title>

    @vite('resources/css/app.css')

</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to the Movie Archive</h1>
    <p>Click the button below to view the list of movies.</p>

    <a href="/movies" class="btn mt-4 inline-block">
        Find Movies!
    </a>
</body>
</html>