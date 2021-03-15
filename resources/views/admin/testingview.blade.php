@foreach($ventas as $venta)
<table>
<tr>
    <td>{{ $venta->id }}</td>
    <td>{{ $venta->user_id }}</td>
    <td>{{ $venta->user->name }}</td>
    <td>{{ $venta->cantidad }}</td>
</tr>
</table>
@endforeach