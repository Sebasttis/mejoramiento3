<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Lista de cliente</h1>

    @foreach ($par as $partido)
    <tr>
        <br>
        
        <td>{{$partido->codigo}}</td>
        <td>{{$partido->golesafuera}}</td>
        <td>{{$partido->golescasa}}</td>
        <td>{{$partido->fecha}}</td>
    
        
        <td><a href="{{route('partido.show',$partido->id)}}">Detalle</a></td>
        <td><a href="{{route('partido.edit',$partido->id)}}">Editar</a></td>
        <form action="{{route('partido.destroy',$partido->id)}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">Eliminar</button>
            </form>
        <br>
       
       
    </tr>
@endforeach
   
</body>
</html>