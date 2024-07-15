<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('page-name')
    </title>
</head>
<body>
    <header>
        <h1>
            Titolo del layout
        </h1>
    </header>
    <main>
        @yield('main-content')
    </main>
    <footer>
        <h1>
            Titolo del layout
        </h1>
    </footer>
</body>
</html>