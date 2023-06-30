<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

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
    return view('principal');
});

//Ruta paa login
Route::get('/login',[LoginController::class,'index'])->name("login");
//Ruta de validación de login
Route::post('/login',[LoginController::class,'store']);

//Ruta para mostrar el dashboard del usuario autenticado con userrname en URL, se agrega al final para 
Route::get('/dashboard',[PostController::class,'index'])->name("post.index");