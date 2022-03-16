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

Route::controller(HistorialController::class)->group(function () {
    //Router que trabaja con un sub URL en el proyecto
    Route::get('historial', 'index')->name('historial.index');
    //Router que trabaja con un sub URL en otro URL
    Route::get('historial/create', 'create')->name('historial.create');
    //Router que trabaja con un sub URL y la pasa un parametro en el proyecto
    Route::get('historial/{id}', 'show')->name('historial.show');
});
