@extends('layouts.header')
@section('content')
<div class="mx-auto text-center py-4 ">
    <a href="productos.html" class="px-4 text-xl">Productos</a>
    <a href="#" class="px-4 text-xl">Promociones</a>
</div>
<div class="mb-4">
    <img src="{{ asset('img/hielo.jpg') }}" alt="">
</div>
<div class="container mx-auto px-2 py-2">
    <h1 class="text-center mb-2 text-2xl font-semibold md:text-3xl">Agua y hielo Everest</h1>
    <p class="mx-2 md:text-xl">Forma parte de nuestra comunidad, obtén puntos por tus compras y podrás llevarte producto gratis o alguno de los regalos que tenemos para ti, para conocer más envíanos un mensaje a nuestros números de contacto</p>
</div>
<div class="container mx-auto px-2 py-2 mt-4 pb-4">
    <h1 class="text-center mb-4 text-2xl font-semibold md:text-3xl">¿Quieres distribuir?</h1>
    <p class="mx-2 mb-2 md:text-xl">Si tienes un negocio o abarrotes y te interesa vender hielo en cubos o agua en garrafón, llamanos, tenemos congeladores y exhibidores disponibles para tu negocio</p>
</div>
@endsection()