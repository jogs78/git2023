<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AGREGAR</title>
</head>
<body>
    UNA NUEVA CASA<BR>
    <form action="{{route('casas.update',$casa->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for='direccion'>Dirección</label>
        <input type='text' name='direccion' id='direccion' value="{{$casa->direccion}}">
        <br>
        <label for='copdigo_postal'>Cópdigo Postal</label>
        <input type='text' name='codigo_postal' id='copdigo_postal' value="{{$casa->codigo_postal}}">
        <br>
        <input type="submit" value="MODIFICAR">
    </form>
</body>
</html>