<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrabajoController;

Route::get('/', function () {
    return redirect()->route('trabajos.index');
});
Route::put('trabajos/{trabajo}/completar',
    [TrabajoController::class, 'completar']
)->name('trabajos.completar');

Route::get('trabajos-historial', [TrabajoController::class, 'historial'])
    ->name('trabajos.historial');
Route::resource('trabajos', TrabajoController::class);

