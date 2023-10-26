<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\MetodosPagoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductosController;
use Database\Factories\CategoriasFactory;

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
Route::post("/productos", [ProductosController::class,'crearProductos']);
Route::put("/productos/{producto}", [ProductosController::class,"actualizarProducto"]);
Route::delete("/productos/{producto}", [ProductosController::class,"eliminarProducto"]);

Route::get("/categorias", [CategoriasController::class,"listarCategoria"]);
Route::post("/categorias", [CategoriasController::class,"crearCategoria"]);
Route::put("/categorias/{categoria}", [CategoriasController::class,"actualizarCategoria"]);
Route::delete("/categorias/{categoria}", [CategoriasController::class,"eliminarCategoria"]);

Route::get("/metodospago", [MetodosPagoController::class,"listarMetodosPago"]);
Route::post("/metodospago", [MetodosPagoController::class,"crearMetodosPago"]);
Route::put("/metodospago/{metodo}", [MetodosPagoController::class,"actualizarMetodoPago"]);
Route::delete("/metodospago/{metodo}", [MetodosPagoController::class,"eliminarMetodoPago"]);
