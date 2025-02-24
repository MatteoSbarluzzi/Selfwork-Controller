<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
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
        return view('chi_siamo');
    }

    public function servizi()
    {
        return view('servizi');
    }

    public function paginaDettaglio1()
    {
        return view('pagina_dettaglio1');
    }

    public function paginaDettaglio2()
    {
        return view('pagina_dettaglio2');
    }

    public function paginaDettaglio3()
    {
        return view('pagina_dettaglio3');
    }
}


