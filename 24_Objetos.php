<?php

//programación orientada a objetos

class persona{

    public $nombre; // propiedades

    public $edad; 

    public $estatura;

    public $profesion;

    private $desendencia; // Propiedad privada

    protected $dirección; // Propiedad protegida, se puede acceder mediante la misma clase y las clases heredadas

    public function asignarDatos($ANombre, $Aedad, $Aestatura, $Aprofesion ){ // acciones o métodos
        $this->nombre=$ANombre;
        $this->edad=$Aedad;
        $this->estatura=$Aestatura;
        $this->profesion=$Aprofesion;
    }

    public function imprimirNombre(){ // Método para imprimir nombre

        echo "Hola mi nombre es: " . $this -> nombre;
    }

    public function imprimirDatos(){ //Método para imprimir todos los datos

        echo "nombre: " . $this -> nombre ;
        echo "edad: " . $this -> edad ;
        echo "estatura: " . $this -> estatura ;
        echo "profesión: " . $this -> profesion ;
    }

    public function datosPrivados(){ //Método para alterar y retornar datos privados 
        $this -> desendencia = "Asia" ;
        return $this -> desendencia ;
    }
}

$objetoAlumno1 = new persona(); // instanciar un objeto
$objetoAlumno2 = new persona();
$objetoAlumno3 = new persona();


$objetoAlumno1 -> asignarDatos("Jhoan","21","1.18","Programador"); // Llamar método
$objetoAlumno2 -> asignarDatos("Baxter","10","1.35","Senior");
$objetoAlumno3 -> asignarDatos("Sofia","25","1.60","Artista");

echo $objetoAlumno1->nombre;  // imprimir propiedad
echo $objetoAlumno3->profesion;

$objetoAlumno2 -> imprimirNombre(); // Utilizar Métodos

$objetoAlumno3 -> imprimirDatos(); 

echo $objetoAlumno1 -> datosPrivados(); 

?>