<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
| Saat buka website langsung ke dashboard
*/

Route::get('/', function () {
    return redirect('/dashboard');
});


/*
|--------------------------------------------------------------------------
| Dashboard (Halaman utama katalog resep)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Recipes Page
|--------------------------------------------------------------------------
*/

Route::get('/recipes', function () {
    return view('recipes.index');
})->middleware(['auth'])->name('recipes');


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';