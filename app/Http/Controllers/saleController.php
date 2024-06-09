<?php

namespace App\Http\Controllers;
use App\Models\Pedidos;
use Illuminate\Http\Request;

class saleController extends Controller
{
    public function index(){
        $pedidos = Pedidos::WHERE('Estado', 'Entregado')->get();
        return view('Admin.sale', compact('pedidos'));
    }
}
