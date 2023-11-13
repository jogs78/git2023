<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>Numero de servicio</th>
            <th>Direccion</th>
            <th>borrar</th>

        </thead>
        <tbody>
            @forelse ($todos as $uno)
            <tr>
                <td>
                    <a href="{{route('terrenos.show',$uno->id)}}">
                        {{$uno->servicio}}
                    </a>
                </td>
                <td>
                    <a href="{{route('terrenos.edit',$uno->id)}}">
                        {{$uno->direccion}}
                    </a>
                </td>
                <td>
                     <form action="{{route('terrenos.destroy',$uno->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="X">
                    </form>
                </td>
            </tr>
        @empty
        <tr>
            <td colspan="3">NO HAY TERRENOS</td>
        </tr>
        
        @endforelse
        </tbody>
    </table>

    si quieres agregar has click <a href="{{route('terrenos.create')}}">aqui</a>
</body>
</html>