<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Formulario de edicion de empleado</h1>
    <form action="{{ route('empleados.update', $empleado->id) }}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @include('empleado.form')
        @csrf
    </form>
</body>

</html>
