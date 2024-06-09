<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    //use HasFactory;
    protected $table = 'tarjetas';

    protected $primaryKey = 'id';
    protected $fillable = ['nombres','apellidos','telefono', 'correo', 'num_tarjeta', 'num_cliente'];
    protected $guarded=[];
    public $timestamps=true;
}
