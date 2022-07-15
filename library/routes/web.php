<?php

use App\Models\book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorsController;


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

//ALL books
Route::get('/', [BookController::class, 'index']);

//AUTHORS
Route::get('/authors', [AuthorsController::class, 'index']);

//SHOW CREATE FORM
Route::get('/books/create', [BookController::class, 'create']);

//STORE BOOK DATA
Route::post('/books', [BookController::class, 'store']);

//SHOW EDIT FORM
Route::get(
    '/books/{book}/edit',
    [BookController::class, 'edit']
);

//UPDATE LISTING
Route::put('/books/{book}/update', [BookController::class, 'update']);

//SINGLE book    
Route::get('/books/{book}', [BookController::class, 'show']);
