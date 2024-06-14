<?php

namespace App\Http\Controllers;

use App\Models\InformacionPedidos;
use App\Models\Pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PedidoController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $user_id = Auth::id();

        // Usar 'where' en lugar de 'whereIn'
        $pedidos_Apartados = Pedidos::where('id_user', $user_id)
            ->where('Estado', 'Apartado')
            ->get();
        $pedidos_Pendientes = Pedidos::where('id_user', $user_id)
            ->where('Estado', 'Pendiente')
            ->get();
        $pedidos_Entregados = Pedidos::where('id_user', $user_id)
            ->where('Estado', 'Entregado')
            ->get();
        $infopedidos = InformacionPedidos::where('id_user', $user_id)->get();

        return view('orders', compact('pedidos_Apartados', 'pedidos_Pendientes', 'pedidos_Entregados' , 'infopedidos'));


        // Manejar el caso donde no hay pedidos para el usuario
        //return view('orders')->with(['error' => 'La cantidad seleccionada supera la cantidad disponible']);
    }

    
 public function info()
    {
        $pedidos=Pedidos::all();
        dump($pedidos->groupBy('Estado'));
    }


    public function updateEstado($id, Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'Estado' => 'required|string',
        ]);

        // Encontrar el pedido por ID
        $pedido = Pedidos::find($id);

        // Si no se encuentra el pedido, retornar un error 404
        if (!$pedido) {
            return response()->json(['error' => 'Pedido no encontrado'], 404);
        }

        // Actualizar el estado del pedido
        $pedido->Estado = $request->input('Estado');
        $pedido->save();

        // Retornar la respuesta exitosa
        return response()->json(['message' => 'Estado del pedido actualizado', 'pedido' => $pedido], 200);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) {
        //
    }
}
