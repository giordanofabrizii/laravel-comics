<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ Vite::asset('resources/scss/app.scss') }}">
    @vite('resources/js/app.js')
    <title>
        @yield('page-name')
    </title>
</head>
<body>

    @include('partials.header')

    <main>
        @yield('main-content')
    </main>

    @include('partials.footer')
</body>
</html>
