<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    //use HasFactory;
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $fillable = ['folio','id_user', 'Hora', 'Hora_Entrega', 'Total','Estado'];
    protected $guarded=[];
    public $timestamps=true;
}
