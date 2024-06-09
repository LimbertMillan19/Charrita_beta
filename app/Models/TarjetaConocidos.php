<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarjetaConocidos extends Model
{
    protected $table = 'tarjeta_conocidos';

    protected $primaryKey = 'id';
    protected $fillable = ['nombres','apellidos','telefono', 'correo', 'num_tarjeta', 'num_cliente','user_id'];
    protected $guarded=[];
    public $timestamps=true;

}
