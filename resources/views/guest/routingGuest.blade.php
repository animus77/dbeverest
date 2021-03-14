@extends('layouts.header')
@section('content')
<h2 class="text-xl py-2 ml-4">Operacion a realizar</h2>
<div class="container text-xl underline py-2 ml-4">
    <table>
        @foreach($sells as $sell)
        <tr>
            <th>{{$sell->fecha}}</th>
            <th>{{$sell->cantidad}}</th>
        </tr>
        @endforeach
    </table>
</div>
@endsection()