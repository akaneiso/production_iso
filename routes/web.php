<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/vaccines/{id}', [App\Http\Controllers\VaccineController::class, 'index']);
Route::post('/vaccines/{id}', [App\Http\Controllers\VaccineController::class, 'done']);
Route::get('/addregister', [App\Http\Controllers\VaccineController::class, 'add']);
Route::post('/addregister', [App\Http\Controllers\VaccineController::class, 'add']);
Route::get('/editregister', [App\Http\Controllers\VaccineController::class, 'edit']);
Route::post('/editregister', [App\Http\Controllers\VaccineController::class, 'update']);
Route::get('/editregister/delete', [App\Http\Controllers\VaccineController::class, 'delete']);
Route::get('/vaccineschedule', [App\Http\Controllers\VaccineController::class, 'show']);

Route::prefix('items')->group(function () {
    Route::get('/', [App\Http\Controllers\ItemController::class, 'index']);
    Route::get('/add', [App\Http\Controllers\ItemController::class, 'add']);
    Route::post('/add', [App\Http\Controllers\ItemController::class, 'add']);
});
