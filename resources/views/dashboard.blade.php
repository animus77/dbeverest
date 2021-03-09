<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <ul class="my-4 p-1">
                    @can('routing')
                    <li class="py-1">
                        <a href="{{ url('routing') }}" class="ml-4 text-xl text-gray-700 font-semibold underline">Administracion</a>
                    </li>
                    @endcan
                    @can('users.show')
                    <li class="py-1">
                        <a href="#" class="ml-4 text-xl text-gray-700 font-semibold underline">Mis compras</a>
                    </li>
                    @endcan
                    @can('users.index')
                    <li class="py-1">
                        <a href="{{ route('users.index') }}" class="ml-4 text-xl text-gray-700 font-semibold underline">Usuarios</a>
                    </li>
                    @endcan
                    @can('roles.index')
                    <li class="py-1">
                        <a href="{{ route('roles.index') }}" class="ml-4 text-xl text-gray-700 font-semibold underline">Roles</a>
                    </li>
                    @endcan
                    <li class="py-1">
                        <a href="{{ route('home') }}" class="ml-4 text-xl text-gray-700 font-semibold underline">Regresar</a>
                    </li>
                </ul>

                <p class="mx-4">Para poder acceder a sus funcionalidades por favor comuniquese con el administrador a nuestros numeros de contacto</p>
            </div>
        </div>
    </div>
</x-app-layout>
