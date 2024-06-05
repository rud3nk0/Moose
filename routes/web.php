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

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group( function () {
//         Route::get('/', function () {
//             return view('dashboard');
//         })->name('dashboard');
//     });

Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'showProfile'])
    ->name('user.showProfile');

Route::get('/', [App\Http\Controllers\Dashboard::class, 'index'])
    ->name('dashboard');

//Post's routes

Route::get('/postCreate', [App\Http\Controllers\PostController::class, 'index'])
->name('postCreate');

Route::get('/postCreate/create', [\App\Http\Controllers\PostController::class, 'create'])
    ->name('postCreate.create');

Route::post('/postCreate', [\App\Http\Controllers\PostController::class, 'store'])
    ->name('postCreate.store');

Route::get('/postCreate/{id}/edit', [\App\Http\Controllers\PostController::class, 'edit'])
    ->name('postCreate.edit');

Route::put('/postCreate/{id}', [\App\Http\Controllers\PostController::class, 'update'])
    ->name('postCreate.update');

Route::delete('/postCreate/{id}', [\App\Http\Controllers\PostController::class, 'destroy'])
    ->name('postCreate.destroy');


//Post's routes close


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
