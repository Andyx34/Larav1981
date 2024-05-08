<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola desde listar</h1>


    <table>
        @foreach($cursos as $curso)
        <tr>
            <td>{{$curso->id}}</td>
            <td>{{$curso->name}}</td>
            <td>{{$curso->description}}</td>
            <td><a href="{{route('curso.show',$curso->id)}}">Mostrar</a></td>
                <td>
                    <form action="{{route('curso.destroy',$curso->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form> 
                </td> 
    
            </tr>
        @endforeach
    </table>
</body>
</html>