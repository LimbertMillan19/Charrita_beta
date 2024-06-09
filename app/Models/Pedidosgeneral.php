<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidosgeneral extends Model
{
    protected $table = 'pedidos_general';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_pedido',
        'folio',
        'id_user',
        'Hora',
        'Hora_Entrega',
        'Total',
        'Estado',
        'Nombre',
        'Apellido',
        'Email',
        'Telefono',
        'Localidad'
    ];
    protected $guarded=[];
    public $timestamps=true;
}
