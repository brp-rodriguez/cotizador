<?php

use App\Http\Controllers\MaterialController;
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


