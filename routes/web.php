<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\KomikController;
use app\Http\Middleware\VerifyCsrfToken;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', CryptoController::class);

Route::resource('/admin', CryptoController::class);

Route::get('/about', function () {
    return view('about', [
        "name" => "lala",
        "email" => "lala@google.com"
    ]);
});

Route::post('/komik/create', [KomikController::class, "store"])->name('komik.create');

Route::resource('/komik', KomikController::class);

Route::get('/shows', [KomikController::class, 'shows'])->name('shows');

// Path: app\Http\Controllers\CryptoController.php