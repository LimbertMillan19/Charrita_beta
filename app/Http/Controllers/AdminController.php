<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedidos;
use Illuminate\Support\Facades\Auth;
use App\Models\InformacionPedidos;

class AdminController extends Controller
{
    public function obtenerPedidos(Request $request)
    {
        $user_id = $request->user()->id;
        $infopedidos = InformacionPedidos::where('id_user', $user_id)->get();

        return response()->json($infopedidos);
    }
    public function pendiente(Request $request)
    {
        // Verificar si la solicitud contiene un token de autenticación
        if ($request->bearerToken()) {
            // Intentar autenticar al usuario utilizando el token
            if (Auth::guard('sanctum')->check()) {
                // El usuario está autenticado, puedes obtenerlo
                $user = Auth::guard('sanctum')->user();
                // $user contiene el modelo del usuario asociado al token

                // Verificar el rol del usuario
                if ($user->rol === 'Administrador') {
                    // El usuario tiene el rol de curador, mandar los pendientes
                    $pendientes = Pedidos::where('Estado', 'Pendiente')->get();
                    return response()->json([
                        'pedidos' => $pendientes
                    ]);
                } else {
                    return response()->json([
                        'mensaje' => 'No tienes el rol adecuado para esto'
                    ], 403); // Responder con un código de estado 403 Forbidden
                }
            } else {
                return response()->json([
                    'mensaje' => 'Token de autenticación inválido o expirado'
                ], 401); // Responder con un código de estado 401 Unauthorized
            }
        } else {
            return response()->json([
                'mensaje' => 'Token de autenticación no proporcionado'
            ], 401); // Responder con un código de estado 401 Unauthorized
        }
    }
}
