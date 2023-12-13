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
            <th>placas</th>
            <th>descripcion</th>
            <th>precio</th>
            <th>borrar</th>

        </thead>
        <tbody>
            @forelse ($todos as $uno)
            <tr>
                <td>
                    <a href="{{route('carros-modificar', $uno->placas)}}">
                        {{$uno->placas}}
                    </a>
                </td>
                <td>
                    <a href="{{route('carros-Uno', $uno->placas)}}">
                        {{$uno->descripcion}}
                    </a>
                </td>
                <td>{{$uno->precio}}</td>
                <td>
                    <form action="{{route('carros-borrar',$uno->placas)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="X">
                    </form>
                </td>
            </tr>
        @empty
        <tr>
            <td colspan="3">NO HAY CARROS</td>
        </tr>
        
        @endforelse
        </tbody>
    </table>

    si quieres agregar has click <a href="{{route('carros-nuevo')}}">aqui</a>
</body>
</html>