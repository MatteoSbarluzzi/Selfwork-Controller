<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [BlogController::class, 'chiSiamo'])->name('chi_siamo');
Route::get('/chi-siamo/detail/{name}', [BlogController::class, 'chiSiamoDettaglio'])->name('chi_siamo_dettaglio');
Route::get('/servizi', [BlogController::class, 'servizi'])->name('servizi');
Route::get('/articolo/{id}', [BlogController::class, 'articoloDettaglio'])->name('articolo_dettaglio');
