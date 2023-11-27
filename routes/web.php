<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProcesoController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
    // return view('welcome');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/home', [HomeController::class, 'index']);

    Route::get('/user', [UserController::class, 'listado']);
    Route::post('/user/ajaxListado', [UserController::class, 'ajaxListado']);
    Route::post('/user/guarda', [UserController::class, 'guarda']);
    Route::post('/user/ajaxPermisos', [UserController::class, 'ajaxPermisos']);
    Route::post('/user/ajaxGuardaPermisos', [UserController::class, 'ajaxGuardaPermisos']);

    Route::get('/rol', [RolController::class, 'listado']);
    Route::post('/rol/guarda', [RolController::class, 'guarda']);
    Route::post('/rol/ajaxListado', [RolController::class, 'ajaxListado']);
    Route::post('/rol/eliminar', [RolController::class, 'eliminar']);

    Route::get('/cliente', [ClienteController::class, 'listado']);
    Route::post('/cliente/guarda', [ClienteController::class, 'guarda']);
    Route::post('/cliente/ajaxListado', [ClienteController::class, 'ajaxListado']);
    Route::post('/cliente/eliminar', [ClienteController::class, 'eliminar']);

    Route::get('/proceso', [ProcesoController::class, 'listado']);
    Route::post('/proceso/guarda', [ProcesoController::class, 'guarda']);
    Route::post('/proceso/ajaxListado', [ProcesoController::class, 'ajaxListado']);
    Route::post('/proceso/eliminar', [ProcesoController::class, 'eliminar']);
    Route::post('/proceso/ajaxListadoArchivo', [ProcesoController::class, 'ajaxListadoArchivo']);
    Route::post('/proceso/eliminarArchivo', [ProcesoController::class, 'eliminarArchivo']);
    Route::post('/proceso/agregarNewArchivos', [ProcesoController::class, 'agregarNewArchivos']);


    Route::get('/tramite', [TramiteController::class, 'listado']);
    Route::post('/tramite/guarda', [TramiteController::class, 'guarda']);
    Route::post('/tramite/ajaxListado', [TramiteController::class, 'ajaxListado']);
    Route::post('/tramite/eliminar', [TramiteController::class, 'eliminar']);
    Route::get('/tramite/verificaHoras', [TramiteController::class, 'verificaHoras']);
    Route::get('/tramite/verificaHorasProceso', [TramiteController::class, 'verificaHorasProceso']);

    Route::get('/eventos/procesos', [ProcesoController::class, 'procesos']);

    Route::get('/reporte', [ReporteController::class, 'listado']);
    Route::post('/reporte/ajaxListadoCliente', [ReporteController::class, 'ajaxListadoCliente']);
    Route::post('/reporte/buscaCliente', [ReporteController::class, 'buscaCliente']);
    // Route::get('/reporte/generaPdf/{cliente_id}/{tipo}', [ReporteController::class, 'generaPdf']);
    Route::get('/reporte/generaPdfTramite/{fecha_ini}/{fecha_fin}', [ReporteController::class, 'generaPdfTramite']);
    Route::get('/reporte/generaPdfProceso/{fecha_ini}/{fecha_fin}', [ReporteController::class, 'generaPdfProceso']);

    Route::get('/reporte/generaPdf/{cliente_id}/{fecha_ini}/{fecha_fin}', [ReporteController::class, 'generaPdf']);


});

require __DIR__.'/auth.php';
