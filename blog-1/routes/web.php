<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

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

// Route::get("posts", [PostController::class, "getAllPosts"]);

Route::resource("categories", CategoryController::class);

// Route::get("categories/{id}", [CategoryController::class, "show"]);

// Route::post('/welcom', [PostController::class, "welcom"])->name("welcom.welcom");
// Route::post('/welcom', [PostController::class, "save"])->name("welcom.save");

// Route::post('/welcom/edit', [PostController::class, "edit"])->name("welcom.welcom");
// Route::post('/welcom/edit', [PostController::class, "save"])->name("welcom.save");

// Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
