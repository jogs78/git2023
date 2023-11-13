<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('terrenos.store')}}" method="post">
        @csrf
        Numero de servicio: <input type="text" name="servicio"><br>
        Direccion: <input type="text" name="direccion"><br>
        <input type="submit" value="Guardar">
    </form>
    
</body>
</html>