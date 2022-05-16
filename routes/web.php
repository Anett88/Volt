<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IngatlanokController;
use App\Http\Controllers\KategoriakController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Abban az esetbe, ha nem kell két táblás összekapcsolás


// //Route::apiResource('/ingatlan', IngatlanokController::class);
// Route::put('/ingatlan/{id}', [IngatlanokController::class, 'update']);
// Route::post('ingatlan', [IngatlanokController::class, 'store']);
// Route::delete('/ingatlan/{id}', [IngatlanokController::class, 'destroy']);

// Route::apiResource('/kategoria', KategoriakController::class);
// Route::put('/kategoria/{id}', [KategoriakController::class, 'update']);
// Route::post('kategoria', [KategoriakController::class, 'store']);
// Route::delete('/kategoria/{id}', [KategoriakController::class, 'destroy']);

