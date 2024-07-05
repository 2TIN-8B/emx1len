<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DirectorioController;
use Illuminate\Support\Facades\Route;

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
//Route::get('/', [DirectorioController::class, 'mostrar'])->name('mostrar');

// Route::get('/directorio/mostrar', function () {
//     return view('directorio');
// });

//Rutas Directorio
Route::get('/directorio/mostrar', [DirectorioController::class, 'mostrardirectorio'])->name('directorio.mostrar');

//Rutas Contacto
Route::get('/contacto/mostrar', [ContactoController::class, 'mostrarcontacto'])->name('contacto.mostrar');
Route::get('/contacto/agregar', [ContactoController::class, 'agregarcontacto'])->name('contacto.agregar');
Route::get('/contacto/buscar', [ContactoController::class, 'buscarcontacto'])->name('contacto.buscar');
Route::get('/contacto/ver', [ContactoController::class, 'vercontacto'])->name('contacto.ver');
Route::get('/contacto/eliminar', [ContactoController::class, 'eliminarcontacto'])->name('contacto.eliminar');

