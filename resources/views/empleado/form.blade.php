// Formulario que tendra los datos en comun con create y edit
<br>
<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" id="Nombre" value="{{ $empleado->Nombre }}" >
<br>
<label for="ApellidoPaterno"> ApellidoPaterno </label>
<input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="{{ $empleado->ApellidoPaterno }}" >
<br>
<label for="ApellidoMaterno"> ApellidoMaterno </label>
<input type="text" name="ApellidoMaterno" id="ApellidoMaterno" value="{{ $empleado->ApellidoMaterno }}" >
<br>
<label for="Correo"> Correo </label>
<input type="text" name="Correo" id="Correo" value="{{ $empleado->Correo }}" >
<br>
<label for="Foto"> Foto </label>
{{ $empleado->Foto }}
<input type="file" name="Foto" id="Foto" value="" >
<br>

<input type="submit" value="Guardar Datos">
<br>