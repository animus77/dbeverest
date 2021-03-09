@extends('layouts.header')
@section('content')
<h1 class="text-xl text-center py-2">Edicion de usuario</h1>
<div class="container">
    <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data" class="flex flex-col">
        <label class="mx-4">Id</label>
        <input type="text" name="id" value="{{ $user->id }}" class="mx-4">
        
        <label class="mx-4">Nombre</label>
        <input type="text" name="name" value="{{ $user->name }}" class="mx-4">

        <label class="mx-4">E-mail</label>
        <input type="text" name="email" value="{{ $user->email }}" class="mx-4">

        @foreach($roles as $rol)
            <label class="ml-4 mb-1">
                <input type="checkbox" name="roles[]" id="" value="{{ $rol->id }}">{{ $rol->name }}
            </label>
        @endforeach

        @csrf
        @method('PUT')
        <input type="submit" value="Guardar" class="w-24 bg-blue-600 border-2 border-blue-200 rounded-md ml-4">
        <a href="{{ route('users.index') }}" class="w-24 bg-blue-600 border-2 border-blue-200 rounded-md ml-4">Regresar</a>

    </form>
</div>
@endsection()