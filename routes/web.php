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



Route::get('/materiales', [MaterialController::class ,'index'])->name('materiales.index');

Route::get('/materiales/create',[MaterialController::class,'create'])->name('materiales.create');

Route::post('/materiales',[MaterialController::class,'store'])->name('materiales.store');

Route::get('/materiales/{material}',[MaterialController::class,'show'])->name('materiales.show');

Route::get('/materiales/{material}',[MaterialController::class,'show'])->name('materiales.show');

Route::get('/materiales/{material}/edit',[MaterialController::class,'edit'])->name('materiales.edit');

Route::get('/materiales/{material}/edit',[MaterialController::class,'edit'])->name('materiales.edit');

Route::put('/materiales/{material}',[MaterialController::class,'update'])->name('materiales.update');


Route::get('/productos', [ProductoController::class ,'index'])->name('productos.index');

Route::get('/cotizaciones', [CotizacionesController::class ,'index'])->name('cotizaciones.index');

Route::get('/ventas', [VentasController::class ,'index'])->name('ventas.index');
