@extends('layouts.header')
@section('content')
<div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4 m-4" >
    <section class="bg-white shadow rounded-md">
        <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Opciones de venta</h1>
        <ol class="p-2">
        @can('sells.create')
            <li class="py-2">
                <a href="{{ route('sells.create') }}" >Nuevo registro de venta</a>
            </li>
        @endcan
        @can('sells.index')
            <li class="py-2">
                <a href="{{ route('sells.index') }}" >Consulta de venta diaria</a>
            </li>
        @endcan
        @can('sells.show')
            <li class="py-2">
                <a href="{{ route('sells.show') }}" >Consulta de venta mensual</a>
            </li>
        @endcan
        </ol>
    </section>
    <section class="bg-white shadow rounded-md">
        <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Opciones de compra</h1>
        <ol class="p-2">
            @can('supplies.create')
            <li class="py-2"><a href="{{ route('supplies.create') }}" class="hover:underline">Nuevo registro</a></li>
            @endcan
            @can('supplies.index')
            <li class="py-2"><a href="{{ route('supplies.index') }}" class="hover:underline">Consulta de gastos</a></li>
            @endcan
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
        <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Promociones</h1>
        <ol class="p-2">
            @can('promotions.index')
            <li class="py-2"><a href="{{ route('promotions.index') }}">Consultar promociones</a></li>
            @endcan
            @can('promotions.create')
            <li class="py-2"><a href="{{ route('promotions.create') }}">Crear nueva promocion</a></li>
            @endcan
        </ol>
    </section>
</div>
@endsection()