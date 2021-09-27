<?php

use App\Http\Controllers\CotizacionesController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentasController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\Router;
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
*/

Route::get('/', function () {    
    return view('welcome');
});

// MATERIALES 
Route::get('/material/searched', [MaterialController::class ,'search'])->name('materiales.search');
Route::get('/materiales', [MaterialController::class ,'index'])->name('materiales.index');
Route::get('/materiales/create',[MaterialController::class,'create'])->name('materiales.create');
Route::post('/materiales',[MaterialController::class,'store'])->name('materiales.store');
Route::get('/materiales/{material}',[MaterialController::class,'show'])->name('materiales.show');
Route::get('/materiales/{material}/edit',[MaterialController::class,'edit'])->name('materiales.edit');
Route::put('/materiales/{material}',[MaterialController::class,'update'])->name('materiales.update');
Route::delete('/materiales/{material}',[MaterialController::class,'destroy'])->name('materiales.destroy');


// Productos
Route::get('/productos/searched', [ProductoController::class ,'search'])->name('productos.search');
Route::get('/productos', [ProductoController::class ,'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class ,'create'])->name('productos.create');
Route::post('/productos', [ProductoController::class ,'store'])->name('productos.store');
Route::get('/productos/{producto}', [ProductoController::class ,'show'])->name('productos.show');
Route::get('/productos/{producto}/edit', [ProductoController::class ,'edit'])->name('productos.edit');
Route::put('/productos/{producto}', [ProductoController::class ,'update'])->name('productos.update');
Route::delete('/productos/{producto}', [ProductoController::class ,'destroy'])->name('productos.destroy');


Route::get('/cotizaciones', [CotizacionesController::class ,'index'])->name('cotizaciones.index');

Route::get('/ventas', [VentasController::class ,'index'])->name('ventas.index');
