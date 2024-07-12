<form action="{{route('partido.update', $partido)}}"  method="POST">

    @csrf
    @method('put')
    
    </label>
    <br>
    <label>
    Codigo del partido:
    <br>
    <input name="codigo" type="text" value="{{old('codigo',$partido-> codigo)}}">
    <br>
    </label>
    <br>
    <label>
    Goles afuera:
    <br>
    <input name="golesafuera" type="text" value="{{old('golesafuera',$partido-> golesafuera)}}">
    <br>
    </label>
    <br>
    <label>
    Goles en casa:
    <br>
    <input name="golescasa" type="text" value="{{old('golescasa',$partido-> golescasa)}}">
    <br>
    </label>
    <br>
    Fecha del partido:
    <br>
    <input name="fecha" type="text" value="{{old('fecha',$partido-> fecha)}}">
    <br>
    <button  type="submit">Actualizar</button>
   
</form>