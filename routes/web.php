<?php

use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\UsuariosController;
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


//INDEX LIBROS
Route::get('/libros',[LibrosController::class,'index'])->name('libro.index');

//SHOW LIBROS
Route::get('/libros/{id}/show',[LibrosController::class,'show'])->where('id','[0-9]+')->name('libro.show');



//CREATE LIBROS
Route::get('/libros/create',[LibrosController::class,'create'])->name('libros.crear');
Route::post('/libros/create',[LibrosController::class,'store'])->name('libros.store');

//EDIT Y UPDATE
Route::get('libros/{id}/editar', [LibrosController::class, 'edit'])->whereNumber('id')->name('libros.editar');
Route::put('libros/{id}/editar', [LibrosController::class, 'update'])->whereNumber('id')->name('libros.update');

//DELETE USUARIOS
Route::delete('libros/{id}/borrar', [LibrosController::class, 'destroy'])
->whereNumber('id')->name('libros.borrar');

// routes\web.php

Route::get('/libros/buscar', [LibrosController::class, 'buscar'])->name('libros.buscar');









//INDEX USUARIOS
Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuario.index');

//SHOW USUARIOS
Route::get('/usuarios/{id}/show',[UsuariosController::class,'show'])->where('id','[0-9]+')->name('usuario.show');

//CREATE USUARIOS
Route::get('/usuarios/create',[UsuariosController::class,'create'])->name('usuarios.crear');
Route::post('/usuarios/create',[UsuariosController::class,'store'])->name('usuarios.store');

//EDIT Y UPDATE
Route::get('usuarios/{id}/editar', [UsuariosController::class, 'edit'])->whereNumber('id')->name('usuarios.editar');
Route::put('usuarios/{id}/editar', [UsuariosController::class, 'update'])->whereNumber('id')->name('usuarios.update');

//DELETE USUARIOS


Route::delete('/usuarios/{id}', [UsuariosController::class, 'destroy'])->whereNumber('id')->name('usuarios.borrar');

// routes\web.php

Route::get('/usuarios/buscar', [UsuariosController::class, 'buscar'])->name('usuarios.buscar');





//INDEX PRESTAMOS
Route::get('/prestamos',[PrestamosController::class,'index'])->name('prestamo.index');

//SHOW PRESTAMOS
Route::get('/prestamos/{id}/show',[PrestamosController::class,'show'])->where('id','[0-9]+')->name('prestamo.show');

//CREATE PRESTAMOS
Route::get('/prestamos/create',[PrestamosController::class,'create'])->name('prestamos.crear');
Route::post('/prestamos/create',[PrestamosController::class,'store'])->name('prestamos.store');

//EDIT Y UPDATE
Route::get('prestamos/{id}/editar', [PrestamosController::class, 'edit'])->whereNumber('id')->name('prestamos.editar');
Route::put('prestamos/{id}/editar', [PrestamosController::class, 'update'])->whereNumber('id')->name('prestamos.update');


//DELETE USUARIOS
Route::delete('prestamos/{id}/borrar', [PrestamosController::class, 'destroy'])
->whereNumber('id')->name('prestamos.borrar');

Route::get('/prestamos/buscar', [PrestamosController::class, 'buscar'])->name('prestamos.buscar');
