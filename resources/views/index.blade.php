<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Everest</title>
</head>
<body>
<header class="bg-white mb-2 shadow flex flex-row justify-between">
        <img src="{{ asset('img/Everest.png') }}" alt="" class="h-16 m-2">
    <ol class="p-2">
        <li><a href="{{ url('login') }}" class="mr-2 mt-2">Ingresar</a></li>
        <li><a href="{{ url('register') }}" class="mr-2 mt-2">Registrate</a></li>
    </ol>
</header>
<main>
    <div class="mx-auto text-center py-4 ">
        <a href="productos.html" class="px-4 text-xl">Productos</a>
        <a href="#" class="px-4 text-xl">Promociones</a>
    </div>
    <div class="mb-4 bg-contain">
        <img src="{{ asset('img/hielo.jpg') }}" alt="">
    </div>
    <section>
        <div class="container mx-auto px-2 py-2">
            <h1 class="text-center mb-2 text-2xl font-semibold md:text-3xl">Planta purificadora Everest</h1>
            <p class="mx-2 md:text-xl">Forma parte de nuestra comunidad, obtén puntos por tus compras y podrás llevarte producto gratis o alguno de los regalos que tenemos para ti, para conocer más envíanos un mensaje a nuestros números de contacto</p>
        </div>
        <div class="container mx-auto px-2 py-2 mt-4 pb-4">
            <h1 class="text-center mb-4 text-2xl font-semibold md:text-3xl">¿Quieres distribuir?</h1>
            <p class="mx-2 mb-2 md:text-xl">Si tienes un negocio o abarrotes y te interesa vender hielo en cubos o agua en garrafón, llamanos, tenemos congeladores y exhibidores disponibles para tu negocio</p>
        </div>
    </section>
</main>
<footer class="bg-gray-400 p-2">
    <div class="grid grid-cols-2 md:grid-cols-3">
        <div class="px-4">
            <p class="font-semibold">Menu rapido</p>
            <ul class="mb-4">
                <li>Inicio</li>
                <li>Productos</li>
                <li>Promociones</li>
                <li>Login</li>
            </ul>
        </div>
        <div class="px-4">
            <p class="font-semibold">Siguenos en:</p>
            <ul>
                <li>Facebook</li>
            </ul>
        </div>
        <div class="px-4">
            <p class="font-semibold">Contacto</p>
            <ul>
                <li>Telefono: 9191463299</li>
                <li>E-mail: everest212@outlook.com</li>
                <li>Direccion: 1 av sur poniente s/n barrio Jordan</li>
            </ul>
        </div>
    </div>
</footer> 
</body>
</html>
