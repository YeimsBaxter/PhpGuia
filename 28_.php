<?php //Conectar con una Base de datos

$servidor = "localhost"; // Este servidor es igual a = 127.0.0.1
$user = "root";
$password = "";

try{   // Trycash es un controlador de errores 

    $conexion=new PDO("mysql:host=$servidor;dbname=album", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //ARRT_ERRMODE Es una constante estática 
    //ERRMODE_EXCEPTION Son los datos que necesita setAttribute para mostrar los errores
    echo "Conexión establecida";

}catch(PDOException $error){
    echo "Conexión erronea";
}


?>