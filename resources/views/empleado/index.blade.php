<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.bootstrap4.min.css">
</head>

<body>
    <h1>Mostrar las listas de empleados</h1>
    <a href="{{ route('empleados.create') }}">Agregar nuevo Empleado</a>

    <table id="empleados">
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
    {{-- $empleados->links() --}}

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/responsive.bootstrap4.min.js"></script>
    <script>
        $('#empleados').DataTable({
            responsive: true,
            autoWidth: false,
            "language": {
                "lengthMenu": "Mostar _MENU_ registros por pagina",
                "zeroRecords": "No encontrado - disculpe",
                "info": "Mostrando pagina _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Siguiente"
                }
            }
        });

    </script>
</body>

</html>
