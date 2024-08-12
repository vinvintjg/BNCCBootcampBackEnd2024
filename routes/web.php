<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
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

Route::get('/create', [BookController::class, 'getCreatePage'])->name('getCreatePage');
//buat nampilin halaman form

Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');
//buat ngepost data create book

Route::get('/view', [BookController::class, 'getBooks'])->name('getBooks');
// buat nampilin halaman view













Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/sesi2', function () {
    return view('sesi2');
});
