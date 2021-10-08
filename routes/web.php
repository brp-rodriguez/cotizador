<?php

use App\Http\Controllers\CotizacionesController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentasController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\SendInvoceController;
use App\Http\Controllers\DownloadInvoceController;
use App\Http\Controllers\ShowInvoceController;

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
Route::get('/cotizaciones/create', [CotizacionesController::class ,'create'])->name('cotizaciones.create');

Route::get('/ventas', [VentasController::class ,'index'])->name('ventas.index');

// PDF 
Route::get('/invoce/show', [SendInvoceController::class])->name('invoce.show');
Route::get('/invoce/download', [DownloadInvoceController::class])->name('invoce.download');
Route::get('/invoce/send', [ShowInvoceController::class])->name('invoce.send');

// PDF 2

Route::get('/pdf1', [ReporteController::class,'download_create_html']);
Route::get('/pdf2', [ReporteController::class,'download_from_template_blade']);
Route::get('/pdf3', [ReporteController::class,'download_stream']);


