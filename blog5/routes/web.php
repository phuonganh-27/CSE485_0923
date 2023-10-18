<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('welcome');
});
//có thể đjăt tuỳ ý cho phần name bên dưới nhưng nên đặt theo cấu trúc vd như books, authors, categories
Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);
Route::post('/authors/new', 'App\Http\Controllers\AuthorController@store')->name('authors.store');
Route::post('/books/new', 'App\Http\Controllers\BookController@store')->name('books.store');
