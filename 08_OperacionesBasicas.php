<?php

if($_POST){

    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];


    // Suma
    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $división=$valorA/$valorB;
    $multiplicación=$valorA*$valorB;

    echo $suma;
    echo "<br/>".$resta;
    echo "<br/>".$división;
    echo "<br/>".$multiplicación;
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
    
    <form action="08_OperacionesBasicas.php" method="post">

    Valor A
    <input type="text" name="valorA" id=""><br/>
    Valor B
    <input type="text" name="valorB" id=""><br/>

    <input type="submit" value="Calcular">



    </form>

</body>
</html>