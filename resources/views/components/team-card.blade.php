<div class="col-md-4">
    <div class="card">
        <img src="https://picsum.photos/150/150?random={{ $index }}" class="card-img-top" alt="Team Member">
        <div class="card-body">
            <h5 class="card-title">{{ $name }} {{ $surname }}</h5>
            <p class="card-text"><strong>Ruolo:</strong> {{ $role }}</p>
            <a href="{{ route('chi_siamo_dettaglio', ['name' => $name]) }}" class="btn btn-primary">Scopri di più</a>
        </div>
    </div>
</div>