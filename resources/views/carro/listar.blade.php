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
        </thead>
        <tbody>
            @forelse ($todos as $uno)
            <tr>
                <td>{{$uno->placas}}</td>
                <td>{{$uno->descripcion}}</td>
                <td>{{$uno->precio}}</td>
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