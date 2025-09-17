<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Archive</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
<body>

    <header>
        <nav>
            <h1>Movie Archive</h1>
            <a href="/movies">
                All Movies
            </a>
            <a href="/movies/create">
                Create New Movie
            </a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
    
</body>
</html>