<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use AppHttp\Controllers\UsuarioController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\MetodoPagoController;

// Rutas de categorías
Route::get('categorias', [CategoriaController::class, 'index']);
Route::post('categorias', [CategoriaController::class, 'crear']);
Route::put('categorias/{id}', [CategoriaController::class, 'actualizar']);
Route::delete('categorias/{id}', [CategoriaController::class, 'eliminar']);

// Rutas de productos
Route::get('productos', [ProductoController::class, 'index']);
Route::get('productos/{id}', [ProductoController::class, 'detalle']);
Route::post('productos', [ProductoController::class, 'crear']);
Route::put('productos/{id}', [ProductoController::class, 'actualizar']);
Route::delete('productos/{id}', [ProductoController::class, 'eliminar']);

// Rutas de usuarios
Route::get('usuarios', [UsuarioController::class, 'index']);
Route::get('usuarios/{id}', [UsuarioController::class, 'detalle']);
Route::post('usuarios', [UsuarioController::class, 'crear']);
Route::put('usuarios/{id}', [UsuarioController::class, 'actualizar']);
Route::delete('usuarios/{id}', [UsuarioController::class, 'eliminar']);

// Rutas de stock
Route::get('stock', [StockController::class, 'index']);
Route::post('stock', [StockController::class, 'crear']);
Route::put('stock/{id}', [StockController::class, 'actualizar']);
Route::delete('stock/{id}', [StockController::class, 'eliminar']);

// Rutas de carritos
Route::get('carritos/{id}', [CarritoController::class, 'detalle']);
Route::post('carritos', [CarritoController::class, 'crear']);
Route::put('carritos/{id}', [CarritoController::class, 'actualizar']);
Route::delete('carritos/{id}', [CarritoController::class, 'eliminar']);

// Rutas de pedidos
Route::get('pedidos', [PedidoController::class, 'index']);
Route::get('pedidos/{id}', [PedidoController::class, 'detalle']);
Route::post('pedidos', [PedidoController::class, 'crear']);
Route::put('pedidos/{id}', [PedidoController::class, 'actualizar']);
Route::delete('pedidos/{id}', [PedidoController::class, 'eliminar']);

// Rutas de orden
Route::get('orden', [OrdenController::class, 'index']);
Route::post('orden', [OrdenController::class, 'crear']);
Route::put('orden/{id}', [OrdenController::class, 'actualizar']);
Route::delete('orden/{id}', [OrdenController::class, 'eliminar']);

// Rutas de métodos de pago
Route::get('metodos_pago', [MetodoPagoController::class, 'index']);
Route::post('metodos_pago', [MetodoPagoController::class, 'crear']);
Route::put('metodos_pago/{id}', [MetodoPagoController::class, 'actualizar']);
Route::delete('metodos_pago/{id}', [MetodoPagoController::class, 'eliminar']);
