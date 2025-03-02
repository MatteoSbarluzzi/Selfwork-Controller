<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servizi - Blog di Matteo</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="wrapper">
        <x-navbar />

        <div class="container mt-5 content">
            <h2 class="mb-4 text-center">I nostri Servizi</h2>
            <div class="row">
                @foreach ($services as $service)
                    <x-service-card :name="$service['name']" :description="$service['description']" />
                @endforeach
            </div>
        </div>

        <x-footer />
    </div>
</body>
</html>
