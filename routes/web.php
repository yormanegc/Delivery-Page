<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\pedidoController;
use App\Http\Controllers\domiciliarioController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PointControllers;
use App\Http\Controllers\InformationController;


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


// .............................. Rutas de pedidos..............................//

Route::get('/', homeController::class);

Route::resource('/order' , OrderController::class )->name('order.index' , 'index');

// .............................. Control de Domiciliarios..............................//

Route::resource('/delivery' , DeliveryController::class );




//.............................. Control de pedidos admin...............................//


Route::resource('/history' , HistoryController::class);


Route::resource('/useres' , UserController::class);

Route::resource('/point' , PointControllers::class);

Route::resource('/information' , InformationController::class);





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
