<div class="col-md-4">
    <div class="card mb-4">
        <img src="https://picsum.photos/400/300?random={{ $index }}" class="card-img-top" alt="Immagine post">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ Str::limit($content, 100) }}</p>
            {{ $slot }} <!-- Aggiunge pulsanti o altri contenuti -->
        </div>
    </div>
</div>
