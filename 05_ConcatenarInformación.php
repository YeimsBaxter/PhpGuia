
<?php

if($_POST){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    echo "Hola don pedigrí, su nombre es ". $nombre;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="Prueba_05.php" method="post">

Nombre
<input type="text" name="nombre" id=""><br/>
Apellido
<input type="text" name="apellido" id=""><br/>
<input type="submit" value="">

</form>



</body>
</html>