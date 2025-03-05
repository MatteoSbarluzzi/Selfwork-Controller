<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Blog di Matteo' }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />

    <div class="container mt-5">
        {{ $slot }}
    </div>

    <x-footer />
</body>
</html>
