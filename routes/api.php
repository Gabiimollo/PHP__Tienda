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

Route::get("/categorias", [CategoriasController::class,"listarCategorias"]);
Route::post("/categorias", [CategoriasController::class,"crearCategorias"]);

Route::get("/metodospago", [MetodosPagoController::class,"listarMetodosPago"]);
Route::post("/metodospago", [MetodosPagoController::class,"crearMetodosPago"]);