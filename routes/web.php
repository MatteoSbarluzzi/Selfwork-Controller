<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = [
        ['id' => 1, 'title' => 'Esordio col botto', 'content' => 'Questo è il contenuto del primo articolo.'],
        ['id' => 2, 'title' => 'Promozioni di metà mese', 'content' => 'Questo è il contenuto del secondo articolo.'],
        ['id' => 3, 'title' => 'Prossime uscite', 'content' => 'Questo è il contenuto del terzo articolo.']
    ];
    return view('homepage', ['posts' => $posts]);
})->name('homepage');

Route::get('/chi-siamo', function () {
    $team = [
        ['name' => 'Luca', 'surname' => 'Bianchi', 'role' => 'Fondatore'],
        ['name' => 'Sara', 'surname' => 'Neri', 'role' => 'Content Creator'],
        ['name' => 'Marco', 'surname' => 'Verdi', 'role' => 'SEO Specialist']
    ];
    return view('chi_siamo', ['team' => $team]);
})->name('chi_siamo');

Route::get('/chi-siamo/detail/{name}', function ($name) {
    $team = [
        ['name' => 'Luca', 'surname' => 'Bianchi', 'role' => 'Fondatore'],
        ['name' => 'Sara', 'surname' => 'Neri', 'role' => 'Content Creator'],
        ['name' => 'Marco', 'surname' => 'Verdi', 'role' => 'SEO Specialist']
    ];
    foreach ($team as $member) {
        if ($name == $member['name']) {
            return view('chi_siamo_dettaglio', ['member' => $member]);
        }
    }
    return abort(404);
})->name('chi_siamo_dettaglio');

Route::get('/servizi', function () {
    $services = [
        ['name' => 'Consulenza SEO', 'description' => 'Ottimizzazione per i motori di ricerca'],
        ['name' => 'Gestione Social', 'description' => 'Creazione e gestione contenuti'],
        ['name' => 'Web Design', 'description' => 'Realizzazione di siti web']
    ];
    return view('servizi', ['services' => $services]);
})->name('servizi');

Route::get('/articoli', function () {
    $articles = [
        ['id' => 1, 'title' => 'Esordio col botto', 'content' => 'Questo è il contenuto del primo articolo.'],
        ['id' => 2, 'title' => 'Promozioni di metà mese', 'content' => 'Questo è il contenuto del secondo articolo.'],
        ['id' => 3, 'title' => 'Prossime uscite', 'content' => 'Questo è il contenuto del terzo articolo.']
    ];
    return view('articoli', ['articles' => $articles]);
})->name('articoli');

Route::get('/articolo/{id}', function ($id) {
    $articles = [
        ['id' => 1, 'title' => 'Esordio col botto', 'content' => 'Questo è il contenuto del primo articolo.'],
        ['id' => 2, 'title' => 'Promozioni di metà mese', 'content' => 'Questo è il contenuto del secondo articolo.'],
        ['id' => 3, 'title' => 'Prossime uscite', 'content' => 'Questo è il contenuto del terzo articolo.']
    ];
    
    foreach ($articles as $article) {
        if ($article['id'] == $id) {
            return view('pagina_dettaglio', ['article' => $article]);
        }
    }
    
    return abort(404);
})->name('articolo_dettaglio');
