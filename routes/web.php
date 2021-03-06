<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\PlatformController;
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


// Route::get('/tes', function () {
//     return view('tes');
// });

// Login
Route::get('/login', [LoginController::class, 'indexlogin'])->name('index-login')->middleware('guest');
Route::post('/login', [LoginController::class, 'postlogin'])->name('post-login');
Route::post('/logout', [LoginController::class, 'postlogout'])->name('post-logout');

// Register
Route::get('/register', [RegisterController::class, 'indexregister'])->name('index-register')->middleware('guest');
Route::post('/register/store', [RegisterController::class, 'storeregister'])->name('store-register');

// User
Route::get('/user', [UserController::class, 'index'])->name('index-user')->middleware('auth');
Route::get('/user/create', [UserController::class, 'create'])->name('create-user')->middleware('auth');

Route::post('/user/store', [UserController::class, 'store'])->name('store-user')->middleware('auth');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('edit-user')->middleware('auth');
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('update-user')->middleware('auth');
Route::delete('/user/delete/{id}', [UserController::class, 'delete'])->name('delete-user')->middleware('auth');

// Game
Route::get('/game', [GameController::class, 'indexgame'])->name('index-game')->middleware('auth');
Route::get('/game/create', [GameController::class, 'creategame'])->name('create-game')->middleware('auth');

Route::post('/game/store', [GameController::class, 'storegame'])->name('store-game')->middleware('auth');
Route::get('/game/edit/{id}', [GameController::class, 'editgame'])->name('edit-game')->middleware('auth');
Route::put('/game/update/{id}', [GameController::class, 'updategame'])->name('update-game')->middleware('auth');
Route::delete('/game/delete/{id}', [GameController::class, 'deletegame'])->name('delete-game')->middleware('auth');

// Genre
Route::get('/genre_admin', [GenreController::class, 'indexgenre'])->name('index-genre')->middleware('auth');
Route::get('/genre_admin/create', [GenreController::class, 'creategenre'])->name('create-genre')->middleware('auth');

Route::post('/genre_admin/store', [GenreController::class, 'storegenre'])->name('store-genre')->middleware('auth');
Route::get('/genre_admin/edit/{id}', [GenreController::class, 'editgenre'])->name('edit-genre')->middleware('auth');
Route::put('/genre_admin/update/{id}', [GenreController::class, 'updategenre'])->name('update-genre')->middleware('auth');
Route::delete('/genre_admin/delete/{id}', [GenreController::class, 'deletegenre'])->name('delete-genre')->middleware('auth');

// Studio
Route::get('/studio_admin', [StudioController::class, 'indexstudio'])->name('index-studio')->middleware('auth');
Route::get('/studio_admin/create', [StudioController::class, 'createstudio'])->name('create-studio')->middleware('auth');

Route::post('/studio_admin/store', [StudioController::class, 'storestudio'])->name('store-studio')->middleware('auth');
Route::get('/studio_admin/edit/{id}', [StudioController::class, 'editstudio'])->name('edit-studio')->middleware('auth');
Route::put('/studio_admin/update/{id}', [StudioController::class, 'updatestudio'])->name('update-studio')->middleware('auth');
Route::delete('/studio_admin/delete/{id}', [StudioController::class, 'deletestudio'])->name('delete-studio')->middleware('auth');

// Platform
Route::get('/platform_admin', [PlatformController::class, 'indexplatform'])->name('index-platform')->middleware('auth');
Route::get('/platform_admin/create', [PlatformController::class, 'createplatform'])->name('create-platform')->middleware('auth');

Route::post('/platform_admin/store', [PlatformController::class, 'storeplatform'])->name('store-platform')->middleware('auth');
Route::get('/platform_admin/edit/{id}', [PlatformController::class, 'editplatform'])->name('edit-platform')->middleware('auth');
Route::put('/platform_admin/update/{id}', [PlatformController::class, 'updateplatform'])->name('update-platform')->middleware('auth');
Route::delete('/platform_admin/delete/{id}', [PlatformController::class, 'deleteplatform'])->name('delete-platform')->middleware('auth');

// About Admin
Route::get('/about_admin', [AboutController::class, 'indexabout'])->name('index-about')->middleware('auth');

// Home
Route::get('/', [HomeController::class, 'indexhome'])->name('index-home');
Route::get('/genre', [HomeController::class, 'genre'])->name('genre');
Route::get('/genre/{genre:genre_name}', [HomeController::class, 'subgenre'])->name('sub-genre');
Route::get('/studio', [HomeController::class, 'studio'])->name('studio');
Route::get('/studio/{studio:studio_name}', [HomeController::class, 'substudio'])->name('sub-studio');
Route::get('/platform', [HomeController::class, 'platform'])->name('platform');
Route::get('/platform/{platform:platform_name}', [HomeController::class, 'subplatform'])->name('sub-platform');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/{posts:game_name}', [HomeController::class, 'postsgame'])->name('posts-game');
