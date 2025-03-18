<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestazioneOffertaController;
use App\Http\Controllers\PrestazioneErogataController;
use App\Http\Controllers\CalcoliController;

Route::prefix('/prestazioni')->group(function () {
    Route::get('/offerte', [PrestazioneOffertaController::class, 'index']);  // GET /api/prestazioni/offerte → mostra le prestazioni offerte
    Route::post('/offerte', [PrestazioneOffertaController::class, 'store']);  // POST /api/prestazioni/offerte → crea un prestazione offerta
    Route::put('/offerte/{id}', [PrestazioneOffertaController::class, 'update']);  // PUT /api/prestazioni/offerte/{id} → modifica una prestazione offerta
    Route::patch('/offerte/{id}', [PrestazioneOffertaController::class, 'patchUpdate']);  // PATCH /api/prestazioni/offerte/{id} -> modifica un campo di una prestazione offerta
    Route::delete('/offerte/{id}', [PrestazioneOffertaController::class, 'destroy']);  // DELETE /api/prestazioni/offerte/{id} → elimina prestazione offerta
    Route::get('/erogate', [PrestazioneErogataController::class, 'index']);  // GET /api/prestazioni/erogate → mostra le prestazioni erogate
    Route::post('/erogate', [PrestazioneErogataController::class, 'store']);  // POST /api/prestazioni/erogate → crea un prestazione erogata
    Route::put('/erogate/{id}', [PrestazioneErogataController::class, 'update']);  // PUT /api/prestazioni/erogate/{id} → modifica una prestazione erogata
    Route::patch('/erogate/{id}', [PrestazioneErogataController::class, 'patchUpdate']);  // PATCH /api/prestazioni/erogate/{id} -> modifica un campo di una prestazione erogata
    Route::delete('/erogate/{id}', [PrestazioneErogataController::class, 'destroy']);  // DELETE /api/prestazioni/erogate/{id} → elimina prestazione erogata
    Route::get('/tempo-risparmiato', [CalcoliController::class, 'showTempoRisparmiato']);  // GET /api/prestazioni/tempo-risparmiato 
});