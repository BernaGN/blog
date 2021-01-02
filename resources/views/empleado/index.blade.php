<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Mostrar las listas de empleados</h1>
    <a href="{{ route('empleados.create') }}">Agregar nuevo Empleado</a>
    <table>
        <thead>
            <th>Id</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Incorporado</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->id }}</td>
                    <td>
                        @if (isset($empleado->photo))
                            <img src="{{ asset($empleado->photo) }}">
                        @endif
                    </td>
                    <td>{{ $empleado->name }}</td>
                    <td>{{ $empleado->lastnameFather }}</td>
                    <td>{{ $empleado->lastnameMother }}</td>
                    <td>{{ $empleado->email }}</td>
                    <td>{{ $empleado->created_at->diffForHumans() }}</td>
                    <td>
                        <a href="{{ route('empleados.edit', $empleado->id) }}">Editar</a>
                        <form action="{{ route('empleados.destroy', $empleado->id) }}" method="post">
                            <button type="submit" onclick="return confirm('Quieres borrar el registro')">
                                Eliminar
                            </button>
                            @method('DELETE')
                            @csrf
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $empleados->links() }}
</body>

</html>
