@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md pb-2 m-4">
    <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Crear nuevo rol</h1>
    <form action="{{ route('roles.store') }}" method="POST" class="flex flex-col m-4 p-4">
        <label class="mx-4">Nombre</label>
        <input type="text" name="name" class="border-2 border-gray-400 rounded mb-2">

        <label class="mx-4">Identificador</label>
        <input type="text" name="identify" class="border-2 border-gray-400 rounded mb-2">

        @foreach($permissions as $permission)
            <label class="ml-4 mb-1">
                <input type="checkbox" name="permissions[]" id="" value="{{ $permission->id }}">{{ $permission->name }}
            </label>
        @endforeach

        @csrf
        <input type="submit" value="Guardar" class="bg-gray-400 border-2 border-gray-600 rounded w-20">
    </form>

</section>

@endsection()