<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('revisar')}}" method="post">
        @csrf
        Nombre de usuario: <input type="text" name="nombre_de_usuario"><br>
        clave: <input type="text" name="clave"><br>
        <input type="submit" value="Revisar">
    </form>
    
</body>
</html>