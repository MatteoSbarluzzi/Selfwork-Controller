<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $article['title'] }} - Blog di Matteo</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>{{ $article['title'] }}</h1>
                <p>{{ $article['content'] }}</p>
            </div>
            <div class="col-lg-4">
                <img src="https://picsum.photos/350/200?random={{ $article['id'] }}" class="img-fluid mb-3" alt="Immagine articolo">
                <img src="https://picsum.photos/350/200?random={{ $article['id']+10 }}" class="img-fluid" alt="Immagine articolo 2">
            </div>
        </div>
    </div>

    <x-footer />
</body>
</html>
