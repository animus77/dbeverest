<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotions;
use Illuminate\Support\Facades\Storage;

class promotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promotions = Promotions::all();
        return view('promotions.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(promotionRequest $request)
    {
        $promotion = promotions::create([
            'titulo' => $request->title,
            'descripcion' => $request->description,
            'precio_adq' => $request->pricebuy,
            'precio_venta'=> $request->pricesell,
            'precio_puntos'=> $request->pointsell
        ]);

        if($request->file('file')){
            $promotion->image = $request->file('file')->store('promotions', 'public');
            $promotion->save();
        }

        return back()->with('info', 'Creado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotions $promotion)
    {
        return view('promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promotions $promotion)
    {
        $promotion->update($request->all());

        if($request->file('file')){
            Storage::disk('public')->delete($promotion->image);
            $promotion->image = $request->file('file')->store('promotions', 'public');
            $promotion->save();
        }

        return back()->with('info', 'editado con exito');
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
