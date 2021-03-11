<div>
    <section class="bg-white shadow rounded-md pb-2 m-4">
        <h1 class="text-xl text-center bg-gray-400 rounded-t-md p-1">Buscar cliente</h1>
        <input wire:model="search" type="text" placeholder="Ingrese nombre" class="border-2 border-gray-400 rounded m-4"/>
    </section>
    <section class="bg-white shadow rounded-md p-2 m-4 overflow-x-auto">
        <table class="mx-auto table-auto">
            <thead>
                <tr class="border-b-2 border-gray-400">
                    <th class="p-2">Id</th>
                    <th class="p-2">Nombre</th>
                    <th class="p-2" colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="border-b border-gray-400">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td ><a class="bg-gray-400 border-2 border-gray-600 rounded w-20 h-8 mx-1" href="{{ route('users.edit', $user) }}">Editar</a></td>
                    <td ><a class="bg-gray-400 border-2 border-gray-600 rounded w-20 h-8 mx-1" href="{{ route('users.show', $user) }}">Saldo</a></td>
                    <td ><a class="bg-gray-400 border-2 border-gray-600 rounded w-20 h-8 mx-1" href="{{ route('users.destroy', $user) }}">Eliminar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>