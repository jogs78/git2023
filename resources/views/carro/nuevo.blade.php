<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('carros-guardar')}}" method="post"><br>
        @csrf
        placas: <input type="text" name="placas"><br>
        descripcion:<input type="text"  name="descripcion"><br>
        precio:<input type="text" name="precio"><br>
        <input type="submit" value="Guardar">
    </form>
    
</body>
</html>