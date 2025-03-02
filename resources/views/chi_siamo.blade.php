<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi Siamo - Blog di Matteo</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />

    <div class="container mt-5">
        <h1 class="text-center mb-4">Chi Siamo</h1>
        <div class="row">
            @foreach ($team as $index => $member)
                <x-team-card :name="$member['name']" :surname="$member['surname']" :role="$member['role']" :index="$index" />
            @endforeach
        </div>
    </div>

    <x-footer />
</body>
</html>
