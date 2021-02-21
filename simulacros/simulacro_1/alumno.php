<?php
  class Alumno{

    private $nombre;
    private $edad;
    private $curso;

    public function __construct($nombre, $edad, $curso){
      $this->nombre = $nombre;
      $this->edad = $edad;
      $this->curso = $curso;
    }

    public function mostrarDatos(){
      echo 'El nombre del alumno es '.$this->nombre.', tiene '.$this->edad.' años y cursa '.$this->curso;
    }

    public function esMayorEdad($edad){
      if($edad>18){
	echo 'El alumno es mayor de edad';
      } else {
	echo 'El alumno es menor de edad';
      }
    }
  }
?>
