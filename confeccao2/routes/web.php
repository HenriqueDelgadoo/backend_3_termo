<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\ClienteController;
use App\http\Controllers\PedidoController;
use App\http\Controllers\ControllerFornecedores;
use App\http\Controllers\EstoqueController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/cliente', [ClienteController::class,'index'])->name('cliente.index');
Route::get('/pedidos', [PedidoController::class,'index'])->name('pedidos.index');
Route::get('/fornecedores', [ControllerFornecedores::class,'index'])->name('fornecedores.index');
Route::get('/estoque', [EstoqueController::class,'index'])->name('estoque.index');

require __DIR__.'/auth.php';
