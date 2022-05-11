<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;

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


Route::get('/tes', function () {
    return view('tes');
});

// Login
Route::get('/login', [LoginController::class, 'indexlogin'])->name('index-login')->middleware('guest');
Route::post('/login', [LoginController::class, 'postlogin'])->name('post-login');
Route::post('/logout', [LoginController::class, 'postlogout'])->name('post-logout');

// Register
Route::get('/register', [RegisterController::class, 'indexregister'])->name('index-register')->middleware('guest');
Route::post('/register/store', [RegisterController::class, 'storeregister'])->name('store-register');

// User
Route::get('/user', [UserController::class, 'index'])->name('index-user')->middleware('auth');
// Route::get('/user', [UserController::class, 'index'])->name('index-user')->middleware('guest');
// Route::get('/user', [UserController::class, 'mimin'])->name('browse-user');
Route::get('/user/create', [UserController::class, 'create'])->name('create-user');

Route::post('/user/store', [UserController::class, 'store'])->name('store-user');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('edit-user');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('update-user');
Route::delete('/user/delete/{id}', [UserController::class, 'delete'])->name('delete-user');

// Game
Route::get('/game', [GameController::class, 'indexgame'])->name('index-game');
Route::get('/game/create', [GameController::class, 'creategame'])->name('create-game');

Route::post('/game/store', [GameController::class, 'storegame'])->name('store-game');
Route::get('/game/edit/{id}', [GameController::class, 'editgame'])->name('edit-game');
Route::put('/game/update/{id}', [GameController::class, 'updategame'])->name('update-game');
Route::delete('/game/delete/{id}', [GameController::class, 'deletegame'])->name('delete-game');

// About
Route::get('/about', [AboutController::class, 'indexabout'])->name('index-about');

// Home
Route::get('/', [HomeController::class, 'indexhome'])->name('index-home');