<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('terrenos.update', $terreno->id)}}" method="post">
        @csrf
        @method('PUT')
        Numero de servicio: <input type="text" name="servicio" value="{{$terreno->servicio}}"><br>
        Direccion: <input type="text" name="direccion" value="{{$terreno->direccion}}"><br>
        <input type="submit" value="Actualizar">
    </form>
    
</body>
</html>