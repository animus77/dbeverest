@extends('layouts.header')
@section('content')
<section class="bg-white shadow rounded-md pb-2 m-4">
    <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Consulta de venta mensual</h1>
    <form action="{{ route('sells.show') }}" method="GET" class="flex flex-col m-4 px-4">
        <label for="">Seleccionar mes</label>
        <select name="month" id="" class="border-2 border-gray-400 rounded mx-2">
            @for ($i = 1; $i <= 12; $i++)
                <option value="{{$i}}">{{ $i }}</option> 
            @endfor
        </select>
        <input type="submit" value="Consultar" class="bg-gray-400 border-2 border-gray-600 rounded w-20 h-8 m-1">
    </form>
</section>
<section class="bg-white shadow rounded-md p-2 m-4 overflow-x-auto">
    <table class="mx-auto table-fixed">
        <thead>
            <tr class="border-b-2 border-gray-400">
                <th rowspan="2">Referencia</th>
                <th colspan="31">Dias</th>
            </tr>
            <tr class="border-b-2 border-gray-400">
                <th colspan="31">Cantidad</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="border-b border-gray-400">
                <td class="text-xs" rowspan="2">{{$user->ref}}</td>
                @foreach($months as $month)
                    @if(($user->id == $month->user_id))
                        <th class="text-center text-xs p-1">{{ $month->dia }}</th>
                    @endif
                @endforeach
            </tr>
            <tr class="border-b border-gray-400">
                @foreach($months as $month)
                    @if(($user->id == $month->user_id))
                        <td class="text-center text-xs p-1">{{ $month->cantidad }}</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</section>

@endsection()