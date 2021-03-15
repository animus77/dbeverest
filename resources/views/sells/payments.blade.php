@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md pb-2 m-4">
    <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Consulta de venta diaria</h1>
    <form action="{{ route('sells.index') }}" method="GET" class="flex flex-row m-4 px-4">
        <label for="">Fecha</label>
        <input type="date" name="fecha" class="border-2 border-gray-400 rounded mx-2">
        <input type="submit" value="Consutar" class="bg-gray-400 border-2 border-gray-600 rounded w-20 h-8">
    </form>
</section>
<section class="bg-white shadow rounded-md p-2 m-4 overflow-x-auto">
    <table class="mx-auto table-fixed">
        <thead>
            <tr class="border-b-2 border-gray-400 text-sm">
                <th class="p-2 w-1/5">Nombre</th>
                <th class="p-2 w-1/5">Cant.</th>
                <th class="p-2 w-1/5">Producto</th>
                <th class="p-2 w-1/5">Pagado</th>
                <th class="p-2 w-1/5" colspan="2">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sells as $sell)
            <tr class="border-b border-gray-400 text-sm">
                <td>{{ $sell->user->name }}</td>
                <td class="text-center">{{ $sell->cantidad }}</td>
                <td class="text-center">{{ $sell->producto }}</td>
                <td class="text-center">{{ $sell->impPagado }}</td>
                <td class="text-center"><a href="{{ route('sells.edit', $sell) }}" class="bg-gray-400 border-2 border-gray-600 rounded w-20 h-8">Editar</a></td>
                <td class="text-center"><a href="#" class="bg-gray-400 border-2 border-gray-600 rounded w-20 h-8">Eliminar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
<section class="bg-white shadow rounded-md p-2 m-4">
    <h1 class="text-xl text-center">Venta del dia</h1>
    <ol class="p-2">
        <li>Venta total de agua: <strong>{{ $cantidadA }}</strong></li>
        <li>Venta total de hielo: <strong>{{ $cantidadH }}</strong></li>
        <li>Pagos de agua: <strong>${{ $pagadoA }}</strong></li>
        <li>Pagos de hielo: <strong>${{ $pagadoH }}</strong></li>
        <li>Pagos del dia: <strong>${{ $pagos }}</strong></li>
    </ol>
</section>

@endsection