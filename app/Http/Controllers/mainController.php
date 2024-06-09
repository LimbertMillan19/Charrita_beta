<?php

namespace App\Http\Controllers;
use App\Models\Pedidosgeneral;
use App\Models\InformacionPedidos;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
        $pedidos = Pedidosgeneral::where('Estado', 'Apartado')->get();

        return view('/Admin/main',compact('pedidos'));
    }

    public function mostrarDetalle($id)
    {
        $pedidos_uno = Pedidosgeneral::where('id_pedido', $id)->get();
        $detalles = InformacionPedidos::where('IDPedido', $id)->get();
        return view('modal.detallepedido', compact('detalles','pedidos_uno'));
    }
}
