<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MercatinoController;

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

Route::get('/', [PublicController::class, 'Homepage'])->name('Homepage');
Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
Route::delete('/profile/destroy',[UserController::class, 'destroy'])->name('user.destroy');
Route::get('/blog/inserisci',[BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/index', [BlogController::class, 'index'])->name('blog.index');
Route::get('/mercatino/index', [MercatinoController::class, 'index'])->name('mercatino.index');
Route::get('/mercatino/create', [MercatinoController::class, 'create'])->name('mercatino.create');
Route::post('/mercatino/store', [MercatinoController::class, 'store'])->name('mercatino.store');
Route::get('/mercatino/show{mercatino}', [MercatinoController::class, 'show'])->name('mercatino.show');
Route::get('mercatino/edit{mercatino}', [MercatinoController::class, 'edit'])->name('mercatino.edit');
Route::put('mercatino/update{mercatino}', [MercatinoController::class, 'update'])->name('mercatino.update');
Route::delete('mercatino/destroy{mercatino}', [MercatinoController::class, 'destroy'])->name('mercatino.destroy');
