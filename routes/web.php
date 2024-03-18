<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\MemoriasController;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\GuiasController;

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
//Rutas para el controlador de usuarios
/* //Ruta agregada , practica mondgo
.
.
.
.
Route::get('/phpmyinfo', function () {
    phpinfo();
})->name('phpmyinfo'); */


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/gender/list', [GenderController::class, 'index'])->name('gender.index');
    Route::get('/gender/create', [GenderController::class, 'create'])->name('gender.create');
    Route::get('/gender/edit/{id}', [GenderController::class, 'edit'])->name('gender.edit');
    Route::delete('/gender/delete/{id}', [GenderController::class, 'destroy'])->name('gender.destroy');
    Route::post('/gender/store', [GenderController::class, 'store'])->name('gender.store');
    Route::put('/gender/update/{id}', [GenderController::class, 'update'])->name('gender.update');

});

Route::middleware('auth')->group(function () {
    Route::get('/rol/list', [RolController::class, 'index'])->name('rol.index');
    Route::get('/rol/create', [RolController::class, 'create'])->name('rol.create');
    Route::get('/rol/edit/{id}', [RolController::class, 'edit'])->name('rol.edit');
    Route::delete('/rol/delete/{id}', [RolController::class, 'destroy'])->name('rol.destroy');
    Route::post('/rol/store', [RolController::class, 'store'])->name('rol.store');
    Route::put('/rol/update/{id}', [RolController::class, 'update'])->name('rol.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/carrera/list', [CarreraController::class, 'index'])->name('carrera.index');
    Route::get('/carrera/create', [CarreraController::class, 'create'])->name('carrera.create');
    Route::get('/carrera/edit/{id}', [CarreraController::class, 'edit'])->name('carrera.edit');
    Route::delete('/carrera/delete/{id}', [CarreraController::class, 'destroy'])->name('carrera.destroy');
    Route::post('/carrera/store', [CarreraController::class, 'store'])->name('carrera.store');
    Route::put('/carrera/update/{id}', [CarreraController::class, 'update'])->name('carrera.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/general/list', [GeneralController::class, 'index'])->name('general.index');
    Route::get('/general/create', [GeneralController::class, 'create'])->name('general.create');
    Route::get('/general/edit/{id}', [GeneralController::class, 'edit'])->name('general.edit');
    Route::delete('/general/delete/{id}', [GeneralController::class, 'destroy'])->name('general.destroy');
    Route::post('/general/store', [GeneralController::class, 'store'])->name('general.store');
    //Route::put('/general/update/{id}', [GeneralController::class, 'update'])->name('general.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/usuario/list', [UsuarioController::class, 'index'])->name('usuario.index');
    Route::get('/usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');
    Route::get('/usuario/edit/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
    Route::delete('/usuario/delete/{id}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
    Route::post('/usuario/store', [UsuarioController::class, 'store'])->name('usuario.store');
    Route::put('/usuario/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');

    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/libros/list', [LibrosController::class, 'index'])->name('libros.index');
    Route::get('/libros/create', [LibrosController::class, 'create'])->name('libros.create');
    Route::get('/libros/edit/{id}', [LibrosController::class, 'edit'])->name('libros.edit');
    Route::delete('/libros/delete/{id}', [LibrosController::class, 'destroy'])->name('libros.destroy');
    Route::post('/libros/store', [LibrosController::class, 'store'])->name('libros.store');
    Route::put('/libros/update/{id}', [LibrosController::class, 'update'])->name('libros.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/articulos/list', [ArticulosController::class, 'index'])->name('articulos.index');
    Route::get('/articulos/create', [ArticulosController::class, 'create'])->name('articulos.create');
    Route::get('/articulos/edit/{id}', [ArticulosController::class, 'edit'])->name('articulos.edit');
    Route::delete('/articulos/delete/{id}', [ArticulosController::class, 'destroy'])->name('articulos.destroy');
    Route::post('/articulos/store', [ArticulosController::class, 'store'])->name('articulos.store');
    Route::put('/articulos/update/{id}', [ArticulosController::class, 'update'])->name('articulos.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/memorias/list', [MemoriasController::class, 'index'])->name('memorias.index');
    Route::get('/memorias/create', [MemoriasController::class, 'create'])->name('memorias.create');
    Route::get('/memorias/edit/{id}', [MemoriasController::class, 'edit'])->name('memorias.edit');
    Route::delete('/memorias/delete/{id}', [MemoriasController::class, 'destroy'])->name('memorias.destroy');
    Route::post('/memorias/store', [MemoriasController::class, 'store'])->name('memorias.store');
    Route::put('/memorias/update/{id}', [MemoriasController::class, 'update'])->name('memorias.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/guias/list', [GuiasController::class, 'index'])->name('guias.index');
    Route::get('/guias/create', [GuiasController::class, 'create'])->name('guias.create');
    Route::get('/guias/edit/{id}', [GuiasController::class, 'edit'])->name('guias.edit');
    Route::delete('/guias/delete/{id}', [GuiasController::class, 'destroy'])->name('guias.destroy');
    Route::post('/guias/store', [GuiasController::class, 'store'])->name('guias.store');
    Route::put('/guias/update/{id}', [GuiasController::class, 'update'])->name('guias.update');
});
