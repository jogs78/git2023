<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    que boletos desea cambiar el dia de hoy @php echo date("d \d\\e M \d\\e\l Y");@endphp :<br><br>
    @foreach ($boletos as $boleto)
        el boleto {{$loop->iteration}} es el numero {{$boleto}} <br>
    @endforeach
    <input type="numeber" >
    <button>cambiar</button>
</body>
</html>


    
