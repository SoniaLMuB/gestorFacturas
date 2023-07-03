<?php

use App\Http\Controllers\EmisoraController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReceptoraController;

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

//Ruta de Logout
Route::get('/logout',[LogoutController::class,'store'])->name("logout"); 

//Ruta para mostrar el dashboard del usuario autenticado con userrname en URL, se agrega al final para 
Route::get('/dashboard',[PostController::class,'index'])->name("post.index");

Route::get('/RegistrandoEmpresaEmisora',[EmisoraController::class,'index'])->name("emisora.index");

Route::post('/RegistrandoEmpresaEmisora',[EmisoraController::class,'store'])->name("emisora.store");
//Ruta para la vista de la tabla de las empresas emisoras
Route::get('/visualizarempresas',[EmisoraController::class,'show'])->name("emisora.show");

Route::get('/RegistrandoEmpresaReceptora',[ReceptoraController::class,'index'])->name("receptora.index");

Route::post('/RegistrandoEmpresaReceptora',[ReceptoraController::class,'store'])->name("receptora.store");
//Ruta para la vista de la tabla de las empresas emisoras
Route::get('/visualizarempresasREceptora',[ReceptoraController::class,'show'])->name("receptora.show");

