@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md pb-2 m-4">
    <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Saldo del cliente</h1>
    <ol class="p-2">
        <li>Nombre: <strong>{{ $users->name }}</strong></li>
        <li>Saldo actual: <strong>${{ $clientDebt }}</strong></li>
        <li>Puntos: <strong>{{ $coins }}</strong></li>

    </ol>
</section>
<section class="bg-white shadow rounded-md p-2 m-4 overflow-x-auto">
    <table class="mx-auto table-auto">
        <thead>
            <tr class="border-b-2 border-gray-400">
                <th class="p-2">Fecha</th>
                <th class="p-2">Producto</th>
                <th class="p-2">Cantidad</th>
                <th class="p-2">Pagado</th>
                <th class="p-2">Debe</th>
            </tr>
        </thead>
        <tbody>
            @foreach($balances as $balance)
            <tr class="border-b border-gray-400">
                <td>{{ $balance->fecha }}</td>
                <td class="text-center">{{ $balance->producto }}</td>
                <td class="text-center">{{ $balance->cantidad }}</td>
                <td class="text-center">{{ $balance->impPagado }}</td>
                <td class="text-center">{{ $balance->impDebe }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection()