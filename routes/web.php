<?php

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

Route::prefix('clientes')->group(function () {
    Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('/create', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/edit/{id}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::get('/show/{id}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::delete('/delete/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
});


Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('monett')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('monett.home');

        Route::prefix('pedidos')->group(function () {
            Route::get('/', [PedidoController::class, 'index'])->name('pedidos.index');
            Route::get('/create', [PedidoController::class, 'create'])->name('pedidos.create');
            Route::post('/create', [PedidoController::class, 'store'])->name('pedidos.store');
            Route::get('/edit/{id}', [PedidoController::class, 'edit'])->name('pedidos.edit');
            Route::put('/edit/{id}', [PedidoController::class, 'update'])->name('pedidos.update');
            Route::get('/show/{id}', [PedidoController::class, 'show'])->name('pedidos.show');
            Route::delete('/delete/{id}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');
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
