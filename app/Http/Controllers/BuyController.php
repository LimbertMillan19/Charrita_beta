<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuyController extends Controller {
    public function index() {
        // Tu lógica para mostrar la página, pasando $Select_panes a la vista
        return view('packet');
    }

    public function Agregar_Carrito(Request $request) {
        // Obtener el array de la solicitud
        $id_val = $request->input('ID');
        $Cantidad_val = $request->input('Cantidad');
        $Disponible = $request->input('Disponible');

        if($Cantidad_val <= $Disponible) {
            $cantidad_pan = [];
            $Select_panes = [];

            $Select_panes = $request->session()->get('Select_panes', $Select_panes);
            $cantidad_pan = $request->session()->get('cantidad_pan', $cantidad_pan);
            // Realizar la lógica de cambio de valores
            array_push($Select_panes, $id_val);
            $cantidad_pan[$id_val] = $Cantidad_val;
            //array_push($cantidad_pan, $Cantidad_val);

            $request->session()->put('Select_panes', $Select_panes);
            $request->session()->put('cantidad_pan', $cantidad_pan);
            // Puedes devolver los nuevos valores o realizar otras acciones según tus necesidades
            return back();
        } else {
            return back()->with(['error' => 'La cantidad seleccionada supera la cantidad disponible', 'id_val' => $id_val]);
        }
    }

    public function CrearPedido(Request $request, string $id_user) {
        $Select_panes = $request->session()->get('Select_panes', []);
        $cantidad_pan = $request->session()->get('cantidad_pan', []);
        $folio = $this->generarFolio();

        // Iniciar la transacción
        DB::beginTransaction();

        try {
            foreach($Select_panes as $pan_id) {
                $result = DB::select('CALL CrearPedido(?, ?, ?, ?, ?)', [$folio, $id_user, '150.00', $pan_id, $cantidad_pan[$pan_id]]);
            }

            // Confirmar la transacción
            DB::commit();
            $Select_panes = [];
            $cantidad_pan = [];
            $request->session()->put('Select_panes', $Select_panes);
            $request->session()->put('cantidad_pan', $cantidad_pan);

            return redirect()->intended('/orders');
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function generarFolio() {
        $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $folio = '';
        $longitud = 10;
        for($i = 0; $i < $longitud; $i++) {
            $indice = rand(0, strlen($caracteres) - 1);
            $folio .= $caracteres[$indice];
        }

        return $folio;
    }
}
