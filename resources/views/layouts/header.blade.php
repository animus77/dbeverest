<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Everest</title>
    @livewireStyles
</head>
<body class="bg-gray-200 h-scren">
    <header class="bg-white shadow-md">
        <ol class="flex flex-row justify-between mx-2 py-2 text-xl">
            <li>Bienvenido, {{ Auth::user()->name }}</li>
            <li><a href="{{ url('dashboard') }}">Menu</a></li>
        </ol>
    </header>
    <main class="bg-gray-200">

        @if(session('info'))
        <div class="bg-white">
            <h1 class="text-xl text-center text-blue-800 font-bold m-4 p-1">{{ session('info') }}</h1>
        </div>
        @endif

        <div class="bg-white">
        @foreach ($errors->all() as $error)
            <h1 class="text-xl text-center text-red-800 font-bold m-4 p-1">{{ $error }}</h1>
        @endforeach
        </div>
        @yield('content')
    </main>
    <!-- <footer class="bg-gray-400 p-2">
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
    </footer> -->
@livewireScripts
</body>
</html>