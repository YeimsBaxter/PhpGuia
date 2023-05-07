<?php

//Métodos estáticos

class Clase{

    public static function Metodo(){   //Creación de un método estático
        echo "Hola soy un método estático";
    }

}

$obj = new Clase(); // Forma común de llamar al método
$obj ->Metodo();

Clase::Metodo(); // Forma rápida de llamar al método

?>