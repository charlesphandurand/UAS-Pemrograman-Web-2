<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;

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

Route::get('/tes', function () {
    return view('tes');
});

// Admin
Route::get('/admin', [AdminController::class, 'index'])->name('index-admin');
Route::get('/admin/mimin', [AdminController::class, 'mimin'])->name('browse-admin');
Route::get('/admin/mimin/create', [AdminController::class, 'create'])->name('create-admin');

Route::post('/admin/mimin/store', [AdminController::class, 'store'])->name('store-admin');
Route::get('/admin/mimin/edit/{id_admin}', [AdminController::class, 'edit'])->name('edit-admin');
Route::put('/admin/mimin/update/{id_admin}', [AdminController::class, 'update'])->name('update-admin');
Route::delete('/admin/mimin/delete/{id_admin}', [AdminController::class, 'delete'])->name('delete-admin');

// Game
Route::get('/game', [GameController::class, 'indexgame'])->name('index-game');
Route::get('/game/create', [GameController::class, 'creategame'])->name('create-game');

Route::post('/game/store', [GameController::class, 'storegame'])->name('store-game');
Route::get('/game/edit/{id_game}', [GameController::class, 'editgame'])->name('edit-game');
Route::put('/game/update/{id_game}', [GameController::class, 'updategame'])->name('update-game');
Route::delete('/game/delete/{id_game}', [GameController::class, 'deletegame'])->name('delete-game');