@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md m-4">
    <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Editar cliente</h1>
    <form action="{{ route('users.update', $user) }}" method="POST" class="flex flex-col m-4 p-4">
        <label class="mx-4">Id</label>
        <input type="text" name="id" value="{{ $user->id }}" class="border-2 border-gray-400 rounded mb-2">
        
        <label class="mx-4">Nombre</label>
        <input type="text" name="name" value="{{ $user->name }}" class="border-2 border-gray-400 rounded mb-2">
        
        <label class="mx-4">Referencia</label>
        <input type="text" name="ref" value="{{ $user->ref }}" class="border-2 border-gray-400 rounded mb-2">

        <label class="mx-4">E-mail</label>
        <input type="text" name="email" value="{{ $user->email }}" class="border-2 border-gray-400 rounded mb-2">

        @foreach($roles as $rol)
            <label class="ml-4 mb-1">
                <input type="checkbox" name="roles[]" id="" value="{{ $rol->id }}">{{ $rol->name }}
            </label>
        @endforeach
        @csrf
        @method('PUT')
        <input type="submit" value="Guardar" class="bg-gray-400 border-2 border-gray-600 rounded w-20">
    </form>

</section>

@endsection()