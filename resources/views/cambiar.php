<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    que boletos desea cambiar el dia de hoy <?php echo date("d \d\\e M \d\\e\l Y") . ":<br><br>";
    foreach ($boletos as $key => $value) {
        echo "el boleto " . $key+1 . " es el número $value <br>"; 
    }
    ?>
    
    <input type="numeber" >
    <button>cambiar</button>
</body>
</html>