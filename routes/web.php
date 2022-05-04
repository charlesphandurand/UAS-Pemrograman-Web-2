<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/admin', [AdminController::class, 'index'])->name('index-admin');
Route::get('/admin/mimin', [AdminController::class, 'mimin'])->name('browse-admin');
Route::get('/admin/mimin/create', [AdminController::class, 'create'])->name('create-admin');

Route::post('/admin/mimin/store', [AdminController::class, 'store'])->name('store-admin');
Route::get('/admin/mimin/edit/{id}', [AdminController::class, 'edit'])->name('edit-admin');
Route::put('/admin/mimin/update/{id}', [AdminController::class, 'update'])->name('update-admin');
Route::delete('/admin/mimin/delete/{id}', [AdminController::class, 'delete'])->name('delete-admin');

Route::get('/tes', function () {
    return view('tes');
});