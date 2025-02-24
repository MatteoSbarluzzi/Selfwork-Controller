<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'index'])->name('homepage');
Route::get('/chi-siamo', [BlogController::class, 'chiSiamo'])->name('chi_siamo');
Route::get('/servizi', [BlogController::class, 'servizi'])->name('servizi');
Route::get('/pagina-dettaglio-1', [BlogController::class, 'paginaDettaglio1'])->name('pagina_dettaglio1');
Route::get('/pagina-dettaglio-2', [BlogController::class, 'paginaDettaglio2'])->name('pagina_dettaglio2');
Route::get('/pagina-dettaglio/3', [BlogController::class, 'paginaDettaglio3'])->name('pagina_dettaglio3');
