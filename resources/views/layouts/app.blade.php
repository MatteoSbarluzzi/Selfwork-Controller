<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Blog di Matteo')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <x-navbar>
        <li class="nav-item"><a class="nav-link" href="{{ route('homepage') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('chi_siamo') }}">Chi siamo</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('servizi') }}">Servizi</a></li>
    </x-navbar>

    <div class="container mt-5 flex-grow-1">
        @yield('content')
    </div>

    <x-footer>
        <p>Email: mariovolpi@infoblog.com</p>
        <p>Telefono: +39 123 456 7890</p>
        <p>Indirizzo: Via della fortuna 241, Bologna, Italia</p>
    </x-footer>
</body>
</html>
