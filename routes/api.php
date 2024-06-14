<?php

use App\Models\InformacionPedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\UserResource;
use App\Http\Resources;
use App\Http\Controllers\AuthController;
use App\Models\Pedidos;
use App\Http\Resources\PedidoResource;
use App\Http\Resources\PedidoCollection;
use App\Http\Resources\AndivCollection;
use Illuminate\Tests\Integration\Log;
use App\Http\Resources\InformacionPedidoCollection;
use App\Http\Controllers\AdminController;

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

Route::get('/user/{id}', function (string $id) {
    return new UserResource(User::findOrFail($id));
});


Route::get('/pedidos', function () {
    $pedidos=Pedidos::all();
    $pedido=$pedidos->random();
    return new PedidoResource($pedido);
});

Route::get('/pedido', function(){
    return new PedidoCollection(Pedidos::all());
});

Route::get('/pedidos-apartados', function(Request $request){
    return new AndivCollection(Pedidos::where("Estado", "Apartado")->get());
});

Route::get('/pedidos-pendientes', [AdminController::class, 'pendiente'])
    ->middleware('auth:sanctum');
use App\Http\Controllers\PedidoController;

Route::put('/pedidos/{id}', [PedidoController::class, 'updateEstado']);


Route::get('/pedidos-entregados', function(Request $request){
    return new PedidoCollection(Pedidos::where("Estado", "Entregado")->get());
});

Route::get('/infopedidos', [AdminController::class, 'obtenerPedidos'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth:sanctum');
