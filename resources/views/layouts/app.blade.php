<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ Vite::asset('resources/img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ Vite::asset('resources/scss/app.scss') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
    <title>
        @yield('page-name', 'Home')
    </title>
</head>
<body>

    @include('partials.header')

    @yield('jumbo')
    <main>

        @yield('main')

    </main>

    <div class="info">
        @yield('nav')
    </div>

    @include('partials.footer')
</body>
</html>

<style>
    .header-jumbo{
        height: 30rem;
        width: 100%;
        object-fit: cover;
        object-position: top
    }
</style>
