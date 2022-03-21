<?php

use App\Http\Controllers\Api\ClienteApiController;
use App\Http\Controllers\Api\PedidoApiController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/', function(){
    return view('monett.home');
});

Route::prefix('api')->group(function () {
    Route::prefix('clientes')->group(function () {
        Route::post('/create', [ClienteApiController::class, 'store'])->name('api.clientes.store');
        Route::post('/edit/{id}', [ClienteApiController::class, 'update'])->name('api.clientes.update');
        Route::get('/show/{id}', [ClienteApiController::class, 'show'])->name('api.clientes.show');
    });

    Route::prefix('pedidos')->group(function () {
        Route::post('/create/{clienteId}', [PedidoApiController::class, 'store'])->name('api.pedidos.store');
        Route::delete('/delete/{clienteId}/{id}', [PedidoApiController::class, 'destroy'])->name('api.pedidos.destroy');
        Route::get('/show/{clienteId}/{id}', [PedidoApiController::class, 'show'])->name('api.pedidos.show');
        Route::get('/list/{clienteId}', [PedidoApiController::class, 'list'])->name('api.pedidos.list');
    });
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {


    Route::prefix('monett')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('monett.home');

        Route::prefix('pedidos')->group(function () {
            Route::get('/', [PedidoController::class, 'index'])->name('pedidos.index');
            Route::get('/create', [PedidoController::class, 'create'])->name('pedidos.create');
            Route::post('/create', [PedidoController::class, 'store'])->name('pedidos.store');
            Route::get('/edit/{pedido}', [PedidoController::class, 'edit'])->name('pedidos.edit');
            Route::put('/edit/{pedido}', [PedidoController::class, 'update'])->name('pedidos.update');
            Route::get('/show/{pedido}', [PedidoController::class, 'show'])->name('pedidos.show');
            Route::delete('/delete/{pedido}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');
        });
        Route::prefix('produtos')->group(function () {
            Route::get('/', [ProdutoController::class, 'index'])->name('produtos.index');
            Route::get('/create', [ProdutoController::class, 'create'])->name('produtos.create');
            Route::post('/create', [ProdutoController::class, 'store'])->name('produtos.store');
            Route::get('/edit/{produto}', [ProdutoController::class, 'edit'])->name('produtos.edit');
            Route::put('/edit/{produto}', [ProdutoController::class, 'update'])->name('produtos.update');
            Route::get('/show/{produto}', [ProdutoController::class, 'show'])->name('produtos.show');
            Route::delete('/delete/{produto}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
        });
    });
});
