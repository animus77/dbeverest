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
        $fecha1 = date_create($date);
        $fecha2 = date_create("now");

        $diff = date_diff($fecha1, $fecha2);
        $valor = $diff->format("%a"); 
        $number = intval($valor);
        return $number;
    }

    public function setdiaAttribute($value){
        $day = $this->fecha;

        $dates = date_create($day);
        $print = date_format($dates,"j");

        $this->attributes['dia'] = strval($print);

    }
}
