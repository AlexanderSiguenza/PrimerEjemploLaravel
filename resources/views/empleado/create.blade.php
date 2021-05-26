// Formulario de creacion de empleado
// csrf  enviar llave de seguridad en Laravel , para saber que el formulario viene del mismo sistema

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf     
    @include('empleado.form',['modo'=>'Crear']);  
</form>