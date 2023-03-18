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
Route::get('/books', [App\Http\Controllers\BookStorageController::class, 'list'])->name('book.index');
Route::get('/books/search', [App\Http\Controllers\BookStorageController::class, 'search'])->name('book.index');
Route::post('/books', [App\Http\Controllers\BookStorageController::class, 'store'])->name('book.store');

Route::get('/books/create', [App\Http\Controllers\BookStorageController::class, 'create'])->name('book.create');
Route::put('/books/{book}', [App\Http\Controllers\BookStorageController::class, 'update'])->name('book.update');
Route::get('/books/{book}', [App\Http\Controllers\BookStorageController::class, 'show'])->name('book.detail');
Route::delete('/books/{book}', [App\Http\Controllers\BookStorageController::class, 'destroy'])->name('book.destroy');

Route::get('/books/{book}/edit', [App\Http\Controllers\BookStorageController::class, 'edit'])->name('book.edit');
Route::get('/books/{book}/delete', [App\Http\Controllers\BookStorageController::class, 'delete'])->name('book.delete');
