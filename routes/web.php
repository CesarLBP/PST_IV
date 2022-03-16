<?php

use App\Http\Controllers\HistorialController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Aquí es donde puede registrar rutas web para su aplicación. Estas
| las rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo grandioso!
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Router que trabaja con el URL raiz del proyecto
Route::get('/', HomeController::class);

//Router que trabaja con un sub URL en el proyecto
Route::get('historial', [HistorialController::class, 'index'])->name('historial.index');
//Router que trabaja con un sub URL en otro URL
Route::get('historial/create', [HistorialController::class, 'create'])->name('historial.create');
//Agregar
Route::post('historial', [HistorialController::class, 'store'])->name('historial.store');
//Router que trabaja con un sub URL y la pasa un parametro en el proyecto
Route::get('historial/{historial}', [HistorialController::class, 'show'])->name('historial.show');
//Editar
Route::get('historial/{historial}/edit', [HistorialController::class, 'edit'])->name('historial.edit');
//Actuializar
Route::put('historial/{historial}', [HistorialController::class, 'update'])->name('historial.update');
//Eliminar
Route::delete('historial/{historial}', [HistorialController::class, 'destroy'])->name('historial.destroy');


// Route::controller(HistorialController::class)->group(function () {
//     //Router que trabaja con un sub URL en el proyecto
//     Route::get('historial', 'index')->name('historial.index');
//     //Router que trabaja con un sub URL en otro URL
//     Route::get('historial/create', 'create')->name('historial.create');
//     //Router que trabaja con un sub URL y la pasa un parametro en el proyecto
//     Route::get('historial/{id}', 'show')->name('historial.show');
// });