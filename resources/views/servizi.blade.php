@extends('layouts.app')

@section('title', 'Servizi')

@section('content')
    <h1 class="text-center mb-4">I Nostri Servizi</h1>
    <div class="row">
        @foreach ($services as $index => $service)
            <x-service-card :name="$service['name']" :description="$service['description']" :index="$index" />
        @endforeach
    </div>

    <!-- Sezione recensioni -->
    <section class="mt-5">
        <h2 class="text-center">Cosa Dicono i Nostri Clienti</h2>
        <div class="row">
            <x-review-card name="Giovanni Rossi" review="Servizio eccellente, altamente consigliato!" rating="5" />
            <x-review-card name="Anna Bianchi" review="Molto soddisfatta della consulenza ricevuta!" rating="4" />
            <x-review-card name="Marco Verdi" review="Ottimo supporto, personale molto gentile." rating="5" />
        </div>
    </section>
@endsection
