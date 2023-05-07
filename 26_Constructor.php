<?php

//Creación y uso del método constructor

class persona{

    public $nombre; 

    public $edad; 

    public $estatura;

    public $profesion;

    function __construct($Nnombre,$Nedad,$Nestatura,$Nprofesion ){ // Método constructor, Se utilizar para asignar valores cuando se crea un instancia, sin necesidad de llamar un método

        $this -> nombre = $Nnombre;
        $this -> edad = $Nedad;
        $this -> estatura = $Nestatura;
        $this -> profesion =$Nprofesion;

    }

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

$objetoPeaton = new persona ("javier",26,1.67,"Piloto"); 

?>