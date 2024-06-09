<?php

namespace App\Http\Controllers;
use App\Models\Pan;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index(){
        $panes = Pan::all();
        return view("/Admin/products", compact("panes"));
    }

    public function store(Request $request)
    {
        $panes = new Pan;
        $panes->Nombre = $request->input('Nombre');
        $panes->Precio =  $request->input('Precio');
        $panes->Descripcion =  $request->input('Descripcion');
        $panes->Cantidad = 0;
        if ($request->hasFile('archivo')) {
            $archivo = $request->file('archivo');

            // Obtener nombre original del archivo
            $nombreArchivo = $archivo->getClientOriginalName();

            // Mover el archivo a una carpeta específica (por ejemplo, public/uploads)
            $archivo->move(public_path('public/uploads'), $nombreArchivo);

            // Puedes almacenar el nombre del archivo en la base de datos si es necesario
            // Ejemplo: $nuevoArchivo = new Archivo();
            $panes->img = 'resources/image/Productos/'.$nombreArchivo;
            // $nuevoArchivo->save();

            //return "¡Archivo subido exitosamente!";
        }
        $panes->save();
        return redirect()->back();
    }
}
