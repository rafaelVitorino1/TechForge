<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ------------------------------CATEGORIA ---------------------------------------------
// CRUD

// LISTAR GET
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');

// SHOW - GET
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

// CREATE GET / STORE POST


// EDIT GET / UPDATE PUT


// DESTROY DELETE

