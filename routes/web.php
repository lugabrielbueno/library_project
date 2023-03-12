<?php

use Illuminate\Support\Facades\Route;

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

/* 
 * Route::get('/', function () {
 *	return view('welcome');
 *});
 */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/books/create', [App\Http\Controllers\BookStorageController::class, 'create'])->name('book.create');
Route::post('/books', [App\Http\Controllers\BookStorageController::class, 'store'])->name('book.store');
Route::get('/books/{book}/detail', [App\Http\Controllers\BookStorageController::class, 'detail'])->name('book.show');
Route::get('/books/{book}/edit', [App\Http\Controllers\BookStorageController::class, 'update'])->name('book.edit');
Route::post('/books/{book}/edit', [App\Http\Controllers\BookStorageController::class, 'update_book'])->name('book.edit');
Route::get('/books/{book}/delete', [App\Http\Controllers\BookStorageController::class, 'delete'])->name('book.destroy');
Route::delete('/books/{book}/delete', [App\Http\Controllers\BookStorageController::class, 'delete_book'])->name('book.destroy');
Route::get('/books', [App\Http\Controllers\BookStorageController::class, 'list'])->name('book.index');
Route::get('/books', [App\Http\Controllers\BookStorageController::class, 'search'])->name('book.index');
