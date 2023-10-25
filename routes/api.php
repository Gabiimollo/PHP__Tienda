<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/productos", [ProductosController::class, 'listarProductos']);
Route::post('/productos', [ProductosController::class,'crearProductos']);
Route::put('/productos', [ProductosController::class,'actualizarProductos']);
Route::delete('productos', [ProductosController::class,'eliminarProductos']);