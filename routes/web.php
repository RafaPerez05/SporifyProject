<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MusicaController; // Adicione esta linha
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return redirect()->route('register');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/musicas', [MusicaController::class, 'index'])
        ->middleware(['auth'])
        ->name('musicas.vue');

            // Rota para servir imagens
    Route::get('/img/{filename}', function ($filename) {
        $path = public_path('img/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    })->where('filename', '.*'); // Aceitar caracteres especiais no nome do arquivo

    //Rota para servir musicas
    Route::get('/music/{filename}', function ($filename) {
        $path = public_path('music/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    })->where('filename', '.*'); // Aceitar caracteres especiais no nome do arquivo
});

require __DIR__.'/auth.php';
