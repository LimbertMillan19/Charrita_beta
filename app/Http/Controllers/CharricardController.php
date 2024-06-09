<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarjeta;

class CharricardController extends Controller
{
    public function showCharricard()
    {
        $tarjetas = Tarjeta::all(); // Obtener todas las tarjetas de la base de datos
        return view('Charricard', compact('tarjetas'));
    }
}
