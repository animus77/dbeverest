@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md pb-2 m-4">
    <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Roles disponibles</h1>
    <div class="mt-2 ml-4">
    @can('roles.create')
        <a href="{{ route('roles.create') }}" class="bg-gray-400 border-2 border-gray-600 rounded">Crear rol</a>
    @endcan
    </div>
</section>
<section class="bg-white shadow rounded-md p-2 m-4 overflow-x-auto">
    <table class="mx-auto table-fixed">
        <thead>
            <tr class="border-b-2 border-gray-400">
                <th class="p-2">Id</th>
                <th class="p-2">Nombre</th>
                <th class="p-2" colspan="3">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    @can('roles.show')
                        <a href="{{ route('roles.show', $role->id) }}" class="bg-gray-400 border-2 border-gray-600 rounded w-20 h-8">Ver</a>
                    @endcan
                </td>
                <td>
                    @can('roles.edit')
                        <a href="{{ route('roles.edit', $role->id) }}" class="bg-gray-400 border-2 border-gray-600 rounded w-20 h-8">Editar</a>
                    @endcan
                </td>
                <td>
                    @can('roles.destroy')
                        <a href="#" class="bg-gray-400 border-2 border-gray-600 rounded w-20 h-8">Eliminar</a>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection()
