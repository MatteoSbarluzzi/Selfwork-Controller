@extends('layouts.app')

@section('title', 'Chi Siamo')

@section('content')
    <h1 class="text-center mb-4">Chi Siamo</h1>
    <div class="row">
        @foreach ($team as $index => $member)
            <x-team-card :name="$member['name']" :surname="$member['surname']" :role="$member['role']" :index="$index" />
        @endforeach
    </div>
@endsection
