<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empleado</title>
</head>

<body>
    <h1>Formulario de creacion de empleado</h1>
    <form action="{{ route('empleados.store') }}" method="post" enctype="multipart/form-data">
        @include('empleado.form')
        @csrf
    </form>
</body>

</html>
