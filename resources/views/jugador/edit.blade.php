<form action="{{route('jugador.update', $jugador)}}"  method="POST">

    @csrf
    @method('put')
    
    </label>
    <br>
    <label>
    Codigo del jugador:
    <br>
    <input name="codigo" type="text" value="{{old('codigo',$jugador-> codigo)}}">
    <br>
    </label>
    <br>
    <label>
    Nombre:
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$jugador-> nombre)}}">
    <br>
    </label>
    <br>
    <label>
    Posicion:
    <br>
    <input name="posicion" type="text" value="{{old('posicion',$jugador-> posicion)}}">
    <br>
    </label>
    <br>
    Fecha de nacimiento:
    <br>
    <input name="fechanacimiento" type="text" value="{{old('fechanacimiento',$jugador-> fechanacimiento)}}">
    <br>
    <button  type="submit">Actualizar</button>
   
</form>