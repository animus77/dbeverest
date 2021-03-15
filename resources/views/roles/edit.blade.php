@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md m-4 md:mx-auto md:max-w-xl sm:max-w-none">
    <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Editar rol</h1>
    <form action="{{ route('roles.update', $role) }}" method="POST" enctype="multipart/form-data" class="flex flex-col m-4 p-4">
        <label class="mx-4">Nombre</label>
        <input type="text" name="name" value="{{ $role->name }}" class="mx-4">

        <label class="mx-4">Identificador</label>
        <input type="text" name="identify" value="{{ $role->guard_name }}" class="mx-4">

        @foreach($permissions as $permission)
            <label class="ml-4 mb-1">
                <input type="checkbox" name="permissions[]" id="" value="{{ $permission->id }}" class="mr-2">{{ $permission->name }}
            </label>
        @endforeach
        @csrf
        @method('PUT')
        <input type="submit" class="bg-gray-400 border-2 border-gray-600 rounded w-20" value="Guardar">
    </form>
</section>
@endsection()