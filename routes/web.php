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


#books
Route::get('/books', [App\Http\Controllers\BookStorageController::class, 'list'])->name('book.index');
Route::get('/books/search', [App\Http\Controllers\BookStorageController::class, 'search'])->name('book.index');
Route::post('/books', [App\Http\Controllers\BookStorageController::class, 'store'])->name('book.store');

Route::get('/books/create', [App\Http\Controllers\BookStorageController::class, 'create'])->name('book.create');
Route::put('/books/{book}', [App\Http\Controllers\BookStorageController::class, 'update'])->name('book.update');
Route::get('/books/{book}', [App\Http\Controllers\BookStorageController::class, 'show'])->name('book.detail');
Route::delete('/books/{book}', [App\Http\Controllers\BookStorageController::class, 'destroy'])->name('book.destroy');

Route::get('/books/{book}/edit', [App\Http\Controllers\BookStorageController::class, 'edit'])->name('book.edit');
Route::get('/books/{book}/delete', [App\Http\Controllers\BookStorageController::class, 'delete'])->name('book.delete');


#readers
Route::get('/readers', [App\Http\Controllers\ReadersController::class, 'list'])->name('reader.index');
Route::get('/readers/search', [App\Http\Controllers\ReadersController::class, 'search'])->name('reader.index');
Route::post('/readers', [App\Http\Controllers\ReadersController::class, 'store'])->name('reader.store');

Route::get('/readers/create', [App\Http\Controllers\ReadersController::class, 'create'])->name('reader.create');
Route::put('/readers/{reader}', [App\Http\Controllers\ReadersController::class, 'update'])->name('reader.update');
Route::get('/readers/{reader}', [App\Http\Controllers\ReadersController::class, 'show'])->name('reader.detail');
Route::delete('/readers/{reader}', [App\Http\Controllers\ReadersController::class, 'destroy'])->name('reader.destroy');

Route::get('/readers/{reader}/edit', [App\Http\Controllers\ReadersController::class, 'edit'])->name('reader.edit');
Route::get('/readers/{reader}/delete', [App\Http\Controllers\ReadersController::class, 'delete'])->name('reader.delete');
