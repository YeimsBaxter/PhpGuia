<?php

if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    if( ($valorA != $valorB) || ($valorA > $valorB) ) {

        echo "A Diferente y mayor a B ";

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritmeticos</title>
</head>
<body>
    
    <form action="Prueba_10.php" method="post">

    Valor A
    <input type="text" name="valorA" id=""><br/>
    Valor B
    <input type="text" name="valorB" id=""><br/>

    <input type="submit" value="Calcular">



    </form>

</body>
</html>