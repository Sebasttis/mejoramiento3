<form action="{{route('jugador.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
      
        <br>
       
        Codigo del jugador:
        <br>
        <input type="text" name="codigo">
    </label>
   
    <br>
    <label>
        Nombre:
        <br>
        <input type="text" name="nombre">
    </label>
   
    <br>
    <label>
        Posicion:
        <br>
        <input type="text" name="posicion">
    </label>
   
    <br>
    <label>
        Fecha de nacimiento:
        <br>
        <input type="text" name="fechanacimiento">
    </label>
   
    <br>
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>
   