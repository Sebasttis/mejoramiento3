<form action="{{route('partido.store')}}" method="POST" enctype="multipart/form-data">

    @csrf
   
    <label>
      
        <br>
       
        Codigo del partido:
        <br>
        <input type="text" name="codigo">
    </label>
   
    <br>
    <label>
        Goles afuera:
        <br>
        <input type="text" name="golesafuera">
    </label>
   
    <br>
    <label>
        Goles en casa:
        <br>
        <input type="text" name="golescasa">
    </label>
   
    <br>
    <label>
        Fecha del partido:
        <br>
        <input type="text" name="fecha">
    </label>
   
    <br>
    <br><br>
    <button type="submit">Enviar Formulario:</button>
    </form>
   