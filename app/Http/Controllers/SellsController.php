<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\sellsRequest;
use App\Models\Sells;
use App\Models\User;

class SellsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $date = $request->fecha;
        $cantidadA = Sells::where('fecha', $date)
            ->where('producto', 'agua')
            ->sum('cantidad');

        $cantidadH = Sells::where('fecha', $date)
            ->where('producto', 'hielo')
            ->sum('cantidad');
            
        $sumasA = Sells::where('fecha', $date)
            ->where('producto', 'agua')
            ->sum('impPagado');

        $sumasH = Sells::where('fecha', $date)
            ->where('producto', 'hielo')
            ->sum('impPagado');
        
        $pagos = Sells::where('fecha', $date)
            ->where('producto', 'pago')
            ->sum('impPagado');

        // $sells = sells::join('users', 'users.id', '=', 'sells.user_id')
        //     ->where('fecha', $date)
        //     ->select('users.name','sells.fecha', 'sells.cantidad', 'sells.user_id', 'sells.producto', 'sells.impPagado', 'users.id')
        //     ->get();

        $sells = Sells::with('user')->where('fecha', $date)->get();

        return view('sells.payments', [
            'sells' => $sells,
            'cantidadA' => $cantidadA,
            'cantidadH' => $cantidadH,
            'pagadoA' => $sumasA,
            'pagadoH' => $sumasH,
            'pagos' => $pagos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('sells.newPayment', [
            'users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(sellsRequest $request)
    {
        //informacion que viene del formulario
        Sells::create([
            //informacion de la tabla y formulario
            'user_id' => $request->ref,
            'fecha' => $request->fecha,
            'dia' => $request->fecha,
            'cantidad' => $request->cantidad,
            'precio' => $request->precio,
            'impPagado' => $request->impPagado,
            'impDebe' => $request->impDebe,
            'producto' => $request->producto,
            'observaciones' => $request->observaciones
        ]);

        return back()->with('info', 'Guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $date = $request->month;
        $users = User::get();

        $months = Sells::with('user')
            ->whereMonth('fecha', $date)
            ->orderBy('user_id', 'asc')
            ->get();
        
        $lasts = sells::latest('fecha')->with('user')->take(1)->get();

        return view('sells.monthPayment', compact('users', 'months', 'lasts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sells $sell)
    {
        // $sells = Sells::where('user_id', $id)->get(); 
        return view('sells.edit', compact('sell'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(sellsRequest $request, Sells $sell)
    {
        $sell->update($request->all());

        return back()->with('info', 'actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
