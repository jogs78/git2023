<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    De que placa quiere pagar refrendos:<br><br>
    @foreach ($placas as $placa)
        <ul>
            <li>{{$placa}}</li>
        </ul>
    @endforeach
    <input type="numeber" >
    <button>pagar</button>
</body>
</html>


    
