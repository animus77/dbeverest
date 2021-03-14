@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md m-4">
    <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Nuevo registro de promocion</h1>
    <form action="{{ route('promotions.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col m-4 p-4">
        <label for="" class="mx-4">Titulo</label>
        <input type="text" name="title" placeholder="Titulo" class="border-2 border-gray-400 rounded mb-2">

        <label for="" class="mx-4">Descripcion</label>
        <input type="text" name="description" placeholder="Descripcion" class="border-2 border-gray-400 rounded mb-2">

        <label for="" class="mx-4">Precio de compra</label>
        <input type="number" name="pricebuy" placeholder="Precio de compra" class="border-2 border-gray-400 rounded mb-2">
        
        <label for="" class="mx-4">Precio de venta</label>
        <input type="number" name="pricesell" placeholder="Precio de venta" class="border-2 border-gray-400 rounded mb-2">
        
        <label for="" class="mx-4">Precio en puntos</label>
        <input type="number" name="pointsell" placeholder="Precio en puntos" class="border-2 border-gray-400 rounded mb-2">
        
        <label for="" class="mx-4">Imagen</label>
        <input type="file" name="file">

        @csrf
        <input type="submit" class="bg-gray-400 border-2 border-gray-600 rounded w-20 mt-2" value="Guardar">
    </form>


</section>
@endsection