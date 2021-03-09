@extends('layouts.header')
@section('content')
<div class="container ml-4 text-xl">
    <ul>
        <li>
            {{ $role->name}}
        </li>
        <li>
            {{ $role->guard_name}}
        </li>
    </ul>
</div>
@endsection()