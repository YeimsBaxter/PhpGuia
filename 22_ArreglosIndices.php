<?php

// Arreglos indicando indices

$frutas=array( "f"=> "fresa", "p"=> "piña", "m"=> "manzana");

print_r($frutas);


echo $frutas["f"]."<br>";


//ciclo foreach


foreach($frutas as $indice=>&$valor){

    //forma 1 de imprimir
    echo $indice."<br/>";

}

foreach($frutas as $indice=>&$valor){

    //forma 2 de imprimir
    echo $frutas[$indice]."<br/>";

}

foreach($frutas as $indice=>&$valor){

    //forma 3 de imprimir
    echo $valor."<br/>";

}

//Ejemplo de uso

foreach($frutas as $indice=>&$valor){

    echo "El valor " .$valor. " Tiene el indice: " .$indice .  "<br/>";

}

?>