<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function homepage()
    {
        $posts = [
            ['id' => 1, 'title' => 'Esordio col botto', 'content' => 'Questo è il contenuto del primo articolo.'],
            ['id' => 2, 'title' => 'Promozioni di metà mese', 'content' => 'Questo è il contenuto del secondo articolo.'],
            ['id' => 3, 'title' => 'Prossime uscite', 'content' => 'Questo è il contenuto del terzo articolo.']
        ];

        return view('homepage', compact('posts'));
    }

    public function chiSiamo()
    {
        $team = [
            ['name' => 'Luca', 'surname' => 'Bianchi', 'role' => 'Fondatore'],
            ['name' => 'Sara', 'surname' => 'Neri', 'role' => 'Content Creator'],
            ['name' => 'Marco', 'surname' => 'Verdi', 'role' => 'SEO Specialist']
        ];

        return view('chi_siamo', compact('team'));
    }

    public function servizi()
    {
        $services = [
            ['name' => 'Consulenza SEO', 'description' => 'Ottimizzazione per i motori di ricerca'],
            ['name' => 'Gestione Social', 'description' => 'Creazione e gestione contenuti'],
            ['name' => 'Web Design', 'description' => 'Realizzazione di siti web']
        ];

        return view('servizi', compact('services'));
    }

    public function articoloDettaglio($id)
    {
        $articles = [
            ['id' => 1, 'title' => 'Esordio col botto', 'content' => 'Questo è il contenuto del primo articolo.'],
            ['id' => 2, 'title' => 'Promozioni di metà mese', 'content' => 'Questo è il contenuto del secondo articolo.'],
            ['id' => 3, 'title' => 'Prossime uscite', 'content' => 'Questo è il contenuto del terzo articolo.']
        ];

        foreach ($articles as $article) {
            if ($article['id'] == $id) {
                return view('pagina_dettaglio', compact('article'));
            }
        }

        return abort(404);
    }
}
