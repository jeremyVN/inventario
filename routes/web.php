<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\catergoriaController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
    Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
    Route::get('/productos/{producto}', [ProductoController::class, 'show'])->name('productos.show');
    Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
    Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');

    Route::get('/categorias', [catergoriaController::class, 'index'])->name('categorias.index');
    Route::get('/categorias/create', [catergoriaController::class, 'create'])->name('categorias.create');
    Route::post('/categorias', [catergoriaController::class, 'store'])->name('categorias.store');
    Route::get('/categorias/{categoria}', [catergoriaController::class, 'show'])->name('categorias.show');
    Route::get('/categorias/{categoria}/edit', [catergoriaController::class, 'edit'])->name('categorias.edit');
    Route::put('/categorias/{categoria}', [catergoriaController::class, 'update'])->name('categorias.update');
    Route::delete('/categorias/{categoria}', [catergoriaController::class, 'destroy'])->name('categorias.destroy');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
