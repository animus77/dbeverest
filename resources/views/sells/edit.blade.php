@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md m-4 md:mx-auto md:max-w-xl sm:max-w-none">
    <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Editar registro de venta</h1>
    <form action="{{ route('sells.update', $sell) }}" method="POST" class="flex flex-col m-4 p-4">
        <label for="" class="mx-4">Fecha</label>
        <input type="date" name="fecha" placeholder="Fecha" class="border-2 border-gray-400 rounded mb-2 focus:shadow-md" value="{{old('fecha', $sell->fecha) }}">
        
        <label for="" class="mx-4">Referencia</label>
        <input type="number" class="border-2 border-gray-400 rounded mb-2" name="ref" placeholder="Referencia" value="{{old('ref',$sell->user_id) }}">
        
        <label for="" class="mx-4">Cantidad</label>
        <input type="number" class="border-2 border-gray-400 rounded mb-2" name="cantidad" placeholder="Cantidad" value="{{old('cantidad', $sell->cantidad) }}">
        
        <label for="" class="mx-4">Precio</label>
        <input type="number" class="border-2 border-gray-400 rounded mb-2" name="precio" placeholder="Precio" value="{{old('precio',$sell->precio) }}">
        
        <label for="" class="mx-4">Importe pagado</label>
        <input type="number" class="border-2 border-gray-400 rounded mb-2" name="impPagado" placeholder="Importe pagado" value="{{old('impPagado',$sell->impPagado) }}">
        
        <label for="" class="mx-4">Importe debe</label>
        <input type="number" class="border-2 border-gray-400 rounded mb-2" name="impDebe" value="0" placeholder="Importe debe" value="{{old('impDebe',$sell->impDebe) }}">
        
        <label for="" class="mx-4">Producto</label>
        <select name="producto" id="" class="border-2 border-gray-400 rounded mb-2">
            <option value="agua">Agua</option>
            <option value="hielo">Hielo</option>
            <option value="pago">Pago</option>
        </select>

        <label for="" class="mx-4">Observaciones</label>
        <input type="text" class="border-2 border-gray-400 rounded mb-2" name="observaciones" placeholder="Observaciones">

        @csrf
        @method('PUT')
        <input type="submit" class="bg-gray-400 border-2 border-gray-600 rounded w-20" value="Guardar">
    </form>
</section>

@endsection()