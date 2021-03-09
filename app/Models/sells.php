<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sells extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'fecha', 'dia','cantidad', 'precio', 'impPagado', 'impDebe', 'producto', 'observaciones'
    ];

    public function getGetSumAttribute()
    {
        
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function month()
    {
        $date = $this->fecha;
        return $date;
    }
}
