<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sells;


class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function routing()
    {

    $fecha = date("y-m-j");

    $cantidadA = Sells::where('fecha', $fecha)
        ->where('producto', 'agua')
        ->sum('cantidad');

    $cantidadH = Sells::where('fecha', $fecha)
        ->where('producto', 'hielo')
        ->sum('cantidad');
        
    $sumasA = Sells::where('fecha', $fecha)
        ->where('producto', 'agua')
        ->sum('impPagado');

    $sumasH = Sells::where('fecha', $fecha)
        ->where('producto', 'hielo')
        ->sum('impPagado');

    $pagos = Sells::where('fecha', $fecha)
        ->where('producto', 'pago')
        ->sum('impPagado');

        return view('admin.routing', [
            'cantidadA' => $cantidadA,
            'cantidadH' => $cantidadH,
            'sumasA' => $sumasA,
            'sumasH' => $sumasH,
            'pagos' => $pagos,
            'fecha' => $fecha
        ]);
    }
    
    public function routingGuest()
    {
        return view('guest.routingGuest');
    }
}
