<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promotions extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo', 'image', 'descripcion', 'precio_adq', 'precio_venta', 'precio_puntos'
    ];

    public function getGetImageAttribute()
    {
        if($this->image){
            return url("storage/$this->image");
        }
    }
}
