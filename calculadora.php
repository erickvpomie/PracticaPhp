<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
<div class="container">
    <img src="src/img/logo.png" alt="" srcset="" class='img'>
</div>
    <form class='Box' action="calculadora.php" method="POST">
    <h1>CALCULADORA PHP </h1>
    <input type="text" name="numero1" value="" placeholder='Ingrese un número' autocomplete='off'>
    <input type="text" name="numero2" value="" placeholder='Ingrese otro número' autocomplete='off'>
    <select name="operacion" class='selector'>
        <option value="suma">SUMA</option>
        <option value="resta">RESTA</option>
        <option value="multiplicacion">MULTIPLICACION</option>
        <option value="division">DIVISION</option>
    </select>
    <input type="submit" name="" value="RESPUESTA">
    <output type = 'number' name=''>
    </form>
</body>
</html>

<?php
if (isset($_POST['numero1']) && isset($_POST['numero2']) && is_numeric($_POST['numero1']) && is_numeric($_POST['numero2'])) {
    
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];

    switch ($operacion) {
        case 'suma':
            echo $numero1+$numero2;
        break;
        case 'resta':
            echo $numero1-$numero2;
        break;
        case 'multiplicacion':
            echo $numero1*$numero2;
        break;
        case 'division':
            echo $numero1/$numero2;
        default:
            echo ' ';
            break;
    }
}

?>