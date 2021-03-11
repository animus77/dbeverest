@extends('layouts.header')
@section('content')
<div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4 m-4" >
    <section class="bg-white shadow rounded-md">
        <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Opciones de venta</h1>
        <ol class="p-2">
            <li class="py-2">
                <a href="{{ route('sells.create') }}" >Nuero registro de venta</a>
            </li>
            <li class="py-2">
                <a href="{{ route('sells.index') }}" >Consulta de venta diaria</a>
            </li>
            <li class="py-2">
                <a href="{{ route('sells.show') }}" >Consulta de venta mensual</a>
            </li>
        </ol>
    </section>
    <section class="bg-white shadow rounded-md">
        <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Opciones de compra</h1>
        <ol class="p-2">
            <li class="py-2"><a href="{{ route('supplies.index') }}" class="hover:underline">Gastos realizados</a></li>
            <li class="py-2"><a href="#" class="hover:underline">Consulta compras diarias</a></li>
        </ol>
    </section>
    <section class="bg-white shadow rounded-md">
        <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Datos del dia</h1>
        <ol class="p-2">
            <li class="mb-2">Fecha actual: <strong>{{ $fecha }}</strong> </li>
            <li>Venta de agua: <strong>{{ $cantidadA }}</strong></li>
            <li>Venta de hielo: <strong>{{ $cantidadH }}</strong></li>
            <li>Efectivo agua: <strong>${{ $sumasA }}</strong></li>
            <li>Efectivo hielo: <strong>${{ $sumasH }}</strong></li>
            <li>Pagos realizado: <strong>${{ $pagos }}</strong></li>
        </ol>
    </section>
    <section class="bg-white shadow rounded-md">
        <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Clientes para visitar</h1>
        <table>
            <tbody>
            @foreach($sells as $sell)
            <tr>
            @if($sell->month() <= 7)
                <td>{{ $sell->user_id}}</td>
                <td>{{ $sell->name}}</td>
                <td>{{ $sell->month()}}</td>
            @endif
            </tr>
            @endforeach
            </tbody>
        </table>
        <ol class="p-2">
            <li>falta visitar: nombre cliente</li>
            <li>falta visitar: nombre cliente</li>
            <li>falta visitar: nombre cliente</li>
        </ol>
    </section>
</div>
@endsection()