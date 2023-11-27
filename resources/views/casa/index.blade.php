<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
    LISTAR LAS CASAS
    <table border="1">
        <thead>
            <th>Direccion</th>
            <th>Codigo Postal</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            @forelse ($todas as $una)
                <tr>
                    <td>
                        <a href="{{route('casas.show', $una->id)}}">
                            {{$una->direccion}}
                        </a>
                    </td>
                    <td>
                        <a href="{{route('casas.edit', $una->id)}}">
                            {{$una->codigo_postal}}
                        </a>
                    </td>
                    <td>
                        <form action="{{route('casas.destroy', $una->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="BORRAR">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">NO HAY CASAS</td>
                </tr>            
            @endforelse
        </tbody>
    </table>
    <a href="{{route('casas.create')}}">AGREGAR</a>  
    @endauth
    @guest
        PRIMERO DEBES INICIAR SESION
    @endguest

</body>
</html>