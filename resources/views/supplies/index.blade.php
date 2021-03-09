@extends('layouts.header')
@section('content')
<div class="container">
    <h1 class="text-xl text-center py-2">Gastos realizados</h1>
    <form action="{{ route('supplies.store') }}" method="POST" class="flex flex-col">
        <label for="" class="mx-4">Fecha</label>
        <input type="date" class="mx-4" name="fecha">

        <label for="" class="mx-4">Producto</label>
        <input type="text" class="mx-4" name="producto">

        <label for="" class="mx-4">Unidad</label>
        <input type="text" class="mx-4" name="unidad">

        <label for="" class="mx-4">Precio</label>
        <input type="number" class="mx-4" name="precio">

        @csrf
        <input type="submit" class="w-24 border-2 border-blue-600 rounded-md ml-4" value="Guardar">

    </form>
    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Producto</th>
                <th>Unidad</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($supplies as $supplie)
            <tr class="text-left">
                <td>{{ $supplie->fecha }}</td>
                <td>{{ $supplie->producto }}</td>
                <td>{{ $supplie->unidad }}</td>
                <td>{{ $supplie->precio }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection()