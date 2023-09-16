@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombres"
        value="{{ isset($empleado->Nombres) ? $empleado->Nombres : old('Nombres') }}" id="Nombres">

</div>
<div class="form-group">
    <label for="Apellidos">Apellidos</label>
    <input type="text" class="form-control" name="Apellidos"
        value="{{ isset($empleado->Apellidos) ? $empleado->Apellidos : old('Apellidos') }}" id="Apellidos">

</div>
<div class="form-group">
    <label for="Identificacion">Identificación</label>
    <input type="text" class="form-control" name="Identificacion"
        value="{{ isset($empleado->Identificacion) ? $empleado->Identificacion : old('Identificacion') }}" id="Identificacion">

</div>
<div class="form-group">
    <label for="Telefono">Telefono</label>
    <input type="text" class="form-control" name="Telefono"
        value="{{ isset($empleado->Telefono) ? $empleado->Telefono : old('Telefono') }}" id="Telefono">

</div>
<div class="form-group">
    <label for="Ciudad">Ciudad</label>
    <input type="text" class="form-control" name="Ciudad"
        value="{{ isset($empleado->Ciudad) ? $empleado->Ciudad : old('Ciudad') }}" id="Ciudad">

</div>
<div class="form-group">
    <label for="Departamento">Departamento</label>
    <input type="text" class="form-control" name="Departamento"
        value="{{ isset($empleado->Departamento) ? $empleado->Departamento : old('Departamento') }}" id="Departamento">

</div>
<input type="submit" class="btn btn-success" value="Guardar">
<a class="btn btn-primary" href="{{ url('empleado/') }}">Cancelar</a>
