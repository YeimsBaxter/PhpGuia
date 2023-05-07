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


    if($valorA == $valorB){

        echo "<br/> A igual a B";

        if($valorA == 1){
            echo "<br/> A igual a 1";
        }

        if($valorA == 2){
            echo "<br/> A igual a 2";
        }
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
    
    <form action="Prueba_11.php" method="post">

    Valor A
    <input type="text" name="valorA" id=""><br/>
    Valor B
    <input type="text" name="valorB" id=""><br/>

    <input type="submit" value="Calcular">



    </form>

</body>
</html>