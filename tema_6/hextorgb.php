<?php

  class hextorgb 
  {

    private $hex='';

    public function getHex(){
      return $this->hex;
    }

    public function setHex($hex){
      $this->hex=$hex;
    }

    // Función para dividir el string. Devuelve un array con las tres partes del string.
    private function divideString(){

      $part_one=substr($this->hex, 1, 2);
      $part_two=substr($this->hex,3, 2);
      $part_three=substr($this->hex, 5, 2);

      $parts=[1=>$part_one,2=>$part_two,3=>$part_three];

      return $parts;
    }

    // Función para saber si una de las partes del valor hexadecimal es válida
    private function partValid($string){
      $hexPattern='/^[0-9A-F]+$/';
      if(preg_match($hexPattern, $string)){
	return true;
      } else {
	return false;
      }
    }

    // Función para saber si el total del hexadecimal es válido
    private function hexValid(){
      $valid = true;
      $divideHex = $this->divideString();
      for($i=1; $i<=3;$i++){
	$valid = $this->partValid($divideHex[$i]);
	if($valid==false){
	  return false;
	  break;
	}
      }
      return true;
    }

    public function toRgb(){
      if($this->hexValid()) {
	
	$rgbValue = [];
	$divideHex = $this->divideString();
	for($i=1;$i<=3;$i++){
	  $rgbValue[$i] = hexdec($divideHex[$i]);
	}
	return '<h3>'.$this->hex.' es ('.$rgbValue[1].','.$rgbValue[2].','.$rgbValue[3].') en RGB';
      } else {
	return 'Valor hexadecimal incorrecto';
      }
    }

  }

?>
