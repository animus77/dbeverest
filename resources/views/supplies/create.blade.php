@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md m-4 md:mx-auto md:max-w-xl sm:max-w-none">
    <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Nuevo registro de gasto</h1>
    <form action="{{ route('supplies.store') }}" method="POST" class="flex flex-col m-4 p-4">
        <label for="" class="mx-4">Fecha</label>
        <input type="date" name="fecha" class="border-2 border-gray-400 rounded mb-2 focus:shadow-md">
        
        <label for="" class="mx-4">Producto</label>
        <input type="text" class="border-2 border-gray-400 rounded mb-2" name="producto" placeholder="Referencia">
                
        <label for="" class="mx-4">importe</label>
        <input type="number" class="border-2 border-gray-400 rounded mb-2" name="importe" placeholder="Precio">
        
        @csrf
        <input type="submit" class="bg-gray-400 border-2 border-gray-600 rounded w-20" value="Guardar">
    </form>
</section>
@endsection()