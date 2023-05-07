<?php

//programación orientada a objetos Herencia

class persona{

    public $nombre; 

    public $edad; 

    public $estatura;

    public $profesion;


    public function asignarDatos($ANombre, $Aedad, $Aestatura, $Aprofesion ){ // acciones o métodos
        $this->nombre=$ANombre;
        $this->edad=$Aedad;
        $this->estatura=$Aestatura;
        $this->profesion=$Aprofesion;
    }

    public function imprimirDatos(){ //Método para imprimir todos los datos

        echo "nombre: " . $this -> nombre ;
        echo "edad: " . $this -> edad ;
        echo "estatura: " . $this -> estatura ;
        echo "profesión: " . $this -> profesion ;
    }

}

class Laburador extends persona{ //Herencia
    public $sueldo;
    public function presentarT(){

        echo "Hola soy ". $this -> nombre. " y soy un " . $this -> profesion. " mi sueldo es: " .$this->sueldo; 
    
    } 
    
}

$objetoTrabajador = new laburador(); //Instanciar objeto

$objetoTrabajador -> asignarDatos("Hernesto",43,1.70,"Herrero"); //Lamar un método

$objetoTrabajador -> sueldo = 3250000 ;

$objetoTrabajador -> presentarT();

?>