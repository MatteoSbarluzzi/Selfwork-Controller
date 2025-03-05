<x-layout title="Homepage">
    <h1 class="text-center mb-4">Benvenuto nel Blog di Matteo</h1>
    <div class="row">
        @foreach ($posts as $index => $post)
            <x-card :title="$post['title']" :content="$post['content']" :index="$index">
                <a href="{{ route('articolo_dettaglio', ['id' => $post['id']]) }}" class="btn btn-primary">Leggi di più</a>
            </x-card>
        @endforeach
    </div>
</x-layout>
