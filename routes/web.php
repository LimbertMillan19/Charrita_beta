<?php

use App\Http\Controllers\crearPaqueteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\paqueteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PanController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\inventaryController;
use App\Http\Controllers\saleController;
use Illuminate\Support\Facades\auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharricardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/users/Login', '/users/Login')->name('login');
Route::view('/', '/home')->name('home');
Route::view('/index', '/users/Login')->name('index');

Route::view('/home', 'home')->name('home');
Route::view('/us', 'us')->name('us');
Route::view('/buy', 'buy')->name('buy');
Route::view('/contact', 'contact')->name('contact');

Route::middleware('auth')->group(function () {

    Route::get('/packet', function () {
        return view('packet');
    })->name('packet');

    Route::get('/charricard', function () {
        return view('Charricard');
    })->name('charricard');

    Route::get('/packetprueba', function(){
        return view('packetprueba');
    })->name('packetprueba');

    // Ruta para las vistas del controlador PanController
    Route::resource('/packet', PanController::class)->except(['show']);

// Ruta específica para index2 del PanController
    Route::get('/packetprueba', [PanController::class, 'index2'])->name('packetprueba');

    Route::get('/orders', function () {
        return view('orders');
    })->name('orders');

    Route::resource('/orders', PedidoController::class)->except(['show']);

    Route::get('/Admin/main', function () {
        return view('Admin.main');
    })->name('main');

    Route::resource('/Admin/main', mainController::class)->except(['show']);
    //Route::post('/vista-main', [BuyController::class, 'index'])->name('agregar.carrito');

    Route::get('/Admin/sale', function () {
        return view('Admin.sale');
    })->name('sale');

    Route::resource('/Admin/sale', saleController::class)->except(['show']);

    Route::get('/Admin/inventory', function () {
        return view('Admin.inventory');
    })->name('inventory');

    Route::resource('/Admin/inventory', inventaryController::class)->except(['show']);

    Route::get('/Admin/products', function () {
        return view('Admin.products');
    })->name('products');

    Route::resource('/Admin/products', productsController::class)->except(['show']);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/createPacket', function () {
        return view('CreatePacket');
    })->name('CrearPaquete');

    Route::get('/createPacket', [crearPaqueteController::class, 'index']);
    Route::post('/createPacket', [crearPaqueteController::class, 'store']);

    Route::get('/charricard', [CharricardController::class, 'showCharricard'])->name('charri');

    Route::post('/agregar-carrito-packet', [paqueteController::class, 'Agregar_Carrito_packet'])->name('agregar.carrito.packet');

    Route::get('/detalle/{id}', [mainController::class, 'mostrarDetalle'])->name('pedidoDetalle');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/agregar-carrito', [BuyController::class, 'Agregar_Carrito'])->name('agregar.carrito');
Route::get('/crear-pedido/{id_user}', [BuyController::class, 'CrearPedido'])->name('crear.pedido');


//->middleware('auth')

Route::view('/user/register', '/users/register')->name('register_user');

Route::post('/validar_Registro',[LoginController::class, 'register'])->name('validar_Registro');
Route::post('/iniciar_Sesion',[LoginController::class, 'login'])->name('iniciar_Sesion');
Route::get('/cerrar_Sesion',[LoginController::class, 'logout'])->name('cerrar_Sesion');

//Route::post('/ejecutar', [PanController::class, 'funcionConParametro'])->name('ejecutar');


require __DIR__.'/auth.php';
