<label for="name">Nombre</label>
<input type="text" name="name" id="name" value="{{ $empleado->name ?? '' }}">
<label for="lastnameFather">Apellido Paterno</label>
<input type="text" name="lastnameFather" id="lastnameFather" value="{{ $empleado->lastnameFather ?? '' }}">
<label for="lastnameMother">Apellido Materno</label>
<input type="text" name="lastnameMother" id="lastnameMother" value="{{ $empleado->lastnameMother ?? '' }}">
<label for="email">Correo</label>
<input type="email" name="email" id="email" value="{{ $empleado->email ?? '' }}">
<label for="photo">Foto</label>
@if (isset($empleado->photo))
    <img src="{{ asset('storage') . '/' . $empleado->photo ?? '' }}">
@endif
<input type="file" name="photo" id="photo">
<button type="submit">Guardar</button>

<a href="{{ route('empleados.index') }}">Regresar</a>
