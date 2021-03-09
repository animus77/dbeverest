@extends('layouts.header')
@section('content')
<h1 class="text-xl text-center py-2">Crear role</h1>
<div class="container py-4">
    <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data" class="flex flex-col">
        <label class="mx-4">Nombre</label>
        <input type="text" name="name" class="mx-4">

        <label class="mx-4">Identificador</label>
        <input type="text" name="identify" class="mx-4">

        @foreach($permissions as $permission)
            <label class="ml-4 mb-1">
                <input type="checkbox" name="permissions[]" id="" value="{{ $permission->id }}">{{ $permission->name }}
            </label>
        @endforeach

        @csrf
        <input type="submit" value="Guardar" class="w-24 border-2 border-blue-200 rounded-md ml-4">
    </form>
    <a href="{{ route('roles.index') }}" class="w-24 border-2 border-blue-200 rounded-md ml-4">Regresar</a>
</div>
@endsection()