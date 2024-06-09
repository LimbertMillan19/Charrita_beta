<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pan;

class paqueteController extends Controller
{
    public function index()
    {
        $data = $this->getSelectedPanesData();
        return view('CreatePacket', $data);
    }

    public function index2()
    {
        $data = $this->getSelectedPanesData();
        return view('packetprueba', $data);
    }

    private function getSelectedPanesData()
    {
        $Select_panes_packet = session('Select_panes_packet', []);
        $cantidad_pan_packet = session('cantidad_pan_packet', []);

        $panesSeleccionados = collect();
        if (!empty($Select_panes_packet)) {
            $panesSeleccionados = Pan::whereIn('id', $Select_panes_packet)->get();
        }

        $total = 0;
        foreach ($panesSeleccionados as $pan) {
            $total += $pan->Precio * $cantidad_pan_packet[$pan->id];
        }

        return [
            'panesSeleccionados' => $panesSeleccionados,
            'cantidad_pan_packet' => $cantidad_pan_packet,
            'total' => $total,
        ];
    }

    public function Agregar_Carrito_packet(Request $request)
    {
        $id_val = $request->input('ID');
        $Cantidad_val = $request->input('Cantidad');

        $cantidad_pan_packet = $request->session()->get('cantidad_pan_packet', []);
        $Select_panes_packet = $request->session()->get('Select_panes_packet', []);

        if (!in_array($id_val, $Select_panes_packet)) {
            $Select_panes_packet[] = $id_val;
        }

        $cantidad_pan_packet[$id_val] = $Cantidad_val;

        $request->session()->put('Select_panes_packet', $Select_panes_packet);
        $request->session()->put('cantidad_pan_packet', $cantidad_pan_packet);

        return back();
    }

    public function CrearPedido(Request $request, string $id_user)
    {
        $Select_panes_packet = $request->session()->get('Select_panes_packet', []);
        $cantidad_pan_packet = $request->session()->get('cantidad_pan_packet', []);
        $folio = $this->generarFolio();

        DB::beginTransaction();

        try {
            $result = [];
            foreach ($Select_panes_packet as $pan_id) {
                $result[] = DB::select('CALL CrearPedido(?, ?, ?, ?, ?)', [$folio, $id_user, '150.00', $pan_id, $cantidad_pan_packet[$pan_id]]);
            }

            DB::commit();

            $request->session()->forget('Select_panes_packet');
            $request->session()->forget('cantidad_pan_packet');

            return view('home', ['resultados' => $result]);
        } catch (\Exception $e) {
            DB::rollback();

            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    private function generarFolio()
    {
        $caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $folio = '';
        $longitud = 10;
        for ($i = 0; $i < $longitud; $i++) {
            $indice = rand(0, strlen($caracteres) - 1);
            $folio .= $caracteres[$indice];
        }

        return $folio;
    }
}
