<x-layout :title="$member['name'] . ' ' . $member['surname']">
    <div class="row">
        <div class="col-lg-8">
            <h1>{{ $member['name'] }} {{ $member['surname'] }}</h1>
            <p><strong>Ruolo:</strong> {{ $member['role'] }}</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Sed posuere consectetur est at lobortis.</p>
        </div>

        <div class="col-lg-4">
            <img src="https://picsum.photos/350/200?random={{ rand(1, 100) }}" class="img-fluid mb-3" alt="Immagine Team Member">
        </div>
    </div>
</x-layout>
