@extends('layouts.header')
@section('content')
<div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4 ">
    @foreach($promotions as $promotion)
    <section class="bg-white shadow-md w-60 mx-auto my-2">
        @if($promotion->image)
        <img src="{{ $promotion->get_image }}" alt="" class="">
        @else
            <h1>imagen no disponible</h1>
        @endif
        <h1 class="text-xl text-center bg-gray-400 p-1 border-t-2 border-gray-600">{{ $promotion->titulo }}</h1>
        <div class="p-1 m-2">
            <p class="text-base">{{ $promotion->descripcion }}<p>
            <p class="text-sm">Precio de compra: ${{ $promotion->precio_adq }}</p>
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
    @endforeach
</div>
@endsection