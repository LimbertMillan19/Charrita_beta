<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pan extends Model
{
    protected $table = 'panes';
    protected $primaryKey= 'id';
    protected $fillable = ['Nombre','Descripcion','Precio','Cantidad','img'];
    protected $guarded=[];
    public $timestamps=true;
}
