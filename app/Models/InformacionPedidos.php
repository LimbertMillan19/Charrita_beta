<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformacionPedidos extends Model
{
    //use HasFactory;
    protected $table = 'usuariopedidos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'IDPedido',
        'folio', 
        'id_user', 
        'Hora', 
        'Hora_Entrega', 
        'total_pedido',
        'Estado',
        'id_pan', 
        'pan_cantidad', 
        'pan_total', 
        'pan_nombre', 
        'Descripcion', 
        'img'
    ];
    protected $guarded=[];
    public $timestamps=true;
}
