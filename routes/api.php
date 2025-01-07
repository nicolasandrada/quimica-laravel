<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

// valida que el usuario este autenticado
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// muestra todos los productos
Route::get('products', [ProductoController::class, 'index']);

// guarda un producto
Route::post('products', [ProductoController::class, 'store']);
