@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md p-2 m-4 overflow-x-auto">
    <table class="mx-auto table-auto">
        <thead>
            <tr class="border-b-2 border-gray-400">
                <th class="p-2">Id</th>
                <th class="p-2">Fecha</th>
                <th class="p-2">Producto</th>
                <th class="p-2">Importe</th>
            </tr>
        </thead>
        <tbody>
            @foreach($supplies as $supplie)
            <tr>
                <td>{{ $supplie->id }}</td>
                <td>{{ $supplie->fecha }}</td>
                <td class="text-center">{{ $supplie->producto }}</td>
                <td class="text-center">${{ $supplie->importe }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection()