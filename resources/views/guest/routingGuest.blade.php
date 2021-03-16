@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md p-2 m-4 grid sm:grid-cols-1 md:grid-cols-2">
<div>
    <h1 class="text-xl my-2">Puntos disponibles: <strong>{{ $coins }}</strong></h1>
    <table class="mx-auto">
        <thead>
            <tr class="border-b-2 border-gray-400">
                <th>Fecha</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sells as $sell)
                <tr class="border-b border-gray-400">
                    @if($sell->cantidad > 0)
                    <td>{{ $sell->fecha }}</td>
                    <td class="text-center">{{ $sell->cantidad }}</td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div>
<h1 class="text-center text-xl my-4">Productos disponibles con sus puntos</h1>
    @foreach($promotions as $promotion)
        @if($coins >= $promotion->precio_puntos)
            <section class="bg-white shadow-md w-60 mx-auto my-4">
                @if($promotion->image)
                <img src="{{ $promotion->get_image }}" alt="" class="">
                @else
                    <h1>imagen no disponible</h1>
                @endif
                <h1 class="text-xl text-center bg-gray-400 p-1 border-t-2 border-gray-600">{{ $promotion->titulo }}</h1>
                <div class="p-1 m-2">
                    <p class="text-base">{{ $promotion->descripcion }}<p>
                    <p class="text-sm">Precio de venta: ${{ $promotion->precio_venta }}</p>
                    <p class="text-sm">Precio en puntos: {{ $promotion->precio_puntos }}</p>
                    @can('promotions.edit')
                    <p class="text-sm text-right py-2"><a href="{{ route('promotions.edit', $promotion) }}">Editar</a></p>
                    @endcan
                    @can('promotions.destroy')
                    <p class="text-sm text-right"><a href="#">Eliminar</a></p>
                    @endcan
                </div>
            </section>
        @else
            <h1 class="text-sm text-center">No dispone de puntos suficientes</h1>
        @endif
    @endforeach
</div>

</section>
@endsection()