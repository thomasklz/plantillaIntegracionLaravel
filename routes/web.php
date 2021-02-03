<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\adminlte\indexController;
use App\Http\Controllers\adminlte\productosController;
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


Route::get('about',[aboutController::class, 'aboutpage']);
Route::get('product',[aboutController::class, 'productpage']);
Route::get('blog',[aboutController::class, 'blogs']);
Route::get('/',[menuController::class, 'cargartodo']);

//Route::get('about','aboutController@aboutpage');

Route::get('admin',[indexController::class, 'login']);
Route::get('admin/index',[indexController::class, 'index']);
Route::get('admin/menu',[indexController::class, 'ingresomenu']);

Route::post('admin/ingreso/menu',[menuController::class, 'store']);


Route::get('admin/productos',[productosController::class, 'principal']);
Route::post('admin/ingreso/productos',[productosController::class, 'store']);