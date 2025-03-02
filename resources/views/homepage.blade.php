<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog di Matteo - Homepage</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar />

    <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
                <x-card :id="$post['id']" :title="$post['title']" :content="$post['content']" />
            @endforeach
        </div>
    </div>

    <x-footer />
</body>
</html>
