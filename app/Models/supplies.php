<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplies extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'fecha', 'producto', 'unidad', 'precio', 'pza_unidad', 'precio_unidad'
    ];
}
