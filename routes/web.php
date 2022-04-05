<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PremioController;
use App\Http\Controllers\PersonaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('premios', [PremioController::class, 'index']);
// Route::post('premios', [PremioController::class, 'store']);
// Route::get('premios/{premio}', [PremioController::class, 'show']);
// Route::put('premios/{premio}', [PremioController::class, 'update']);
// Route::delete('premios/{premio}', [PremioController::class, 'destroy']);


Route::post('/persona', [PersonaController::class, 'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
