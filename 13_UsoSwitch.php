<?php

if($_POST){

    $boton=$_POST['valor'];

    switch($boton){

        case 1:
            echo "Presionó el 1";
            break;
        case 2:
            echo "Presionó 2";
            break;
        case 3:
            echo "Presionó 3";
    }

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    
    <form action="Prueba_13.php" method="post">

    <input type="submit" name="valor" value="1">
    <br/>
    <input type="submit" name="valor" value="2">
    <br/>
    <input type="submit" name="valor"  value="3">

    </form>

</body>
</html>