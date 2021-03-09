@extends('layouts.header')
@section('content')
<h2 class="p-2">Descripcion de roles disponibles</h2>
<div class="container px-2 py-4 ml-4">
    @can('roles.create')
        <a href="{{ route('roles.create') }}" class="ml-4 text-sm text-gray-700 font-semibold underline">Crear</a>
    @endcan
    <table class="table-auto">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>
                    @can('roles.show')
                        <a href="{{ route('roles.show', $role->id) }}" class="ml-4 text-sm text-gray-700 font-semibold underline">Ver</a>
                    @endcan
                </td>
                <td>
                    @can('roles.edit')
                        <a href="{{ route('roles.edit', $role->id) }}" class="ml-4 text-sm text-gray-700 font-semibold underline">Editar</a>
                    @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection()
