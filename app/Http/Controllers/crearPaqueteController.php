<?php

namespace App\Http\Controllers;

use App\Models\Pan;
use Illuminate\Http\Request;

class crearPaqueteController extends Controller
{
    private function getPanesData()
    {
        $Select_panes_packet = session('Select_panes_packet', []);
        $cantidad_pan_packet = session('cantidad_pan_packet', []);

        if (!empty($Select_panes_packet)) {
            $panesSeleccionados = Pan::whereIn('id', $Select_panes_packet)->get();
        } else {
            $panesSeleccionados = collect();
        }

        $panes = Pan::paginate(8);

        // Calcular el total
        $total = 0;
        foreach ($panesSeleccionados as $pan) {
            $total += $pan->Precio * $cantidad_pan_packet[$pan->id];
        }

        return [
            'panes' => $panes,
            'panesSeleccionados' => $panesSeleccionados,
            'cantidad_pan_packet' => $cantidad_pan_packet,
            'total' => $total,
        ];
    }

    public function index()
    {
        $data = $this->getPanesData();
        return view('CreatePacket', $data);
    }
}
