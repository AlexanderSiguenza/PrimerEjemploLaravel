// Formulario de creacion de empleado
// csrf  enviar llave de seguridad en Laravel , para saber que el formulario viene del mismo sistema

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf 

    <label for="Nombre"> Nombre </label>
    <input type="text" name="Nombre" id="Nombre">
    <br>
    <label for="ApellidoPaterno"> ApellidoPaterno </label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno">
    <br>
    <label for="ApellidoMaterno"> ApellidoMaterno </label>
    <input type="text" name="ApellidoMaterno" id="ApellidoMaterno">
    <br>
    <label for="Correo"> Correo </label>
    <input type="text" name="Correo" id="Correo">
    <br>
    <label for="Foto"> Foto </label>
    <input type="file" name="Foto" id="Foto">
    <br>

    <input type="submit" value="Guardar Datos">
    <br>
</form>