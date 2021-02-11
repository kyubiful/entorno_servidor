<?php
  Class Connect {

    private $ip='localhost';
    private $user='root';
    private $pass='root';
    private $db='gameofthrones';
    private $port=8889;

    public function connection(){
      $cnx=new mysqli($this->ip,$this->user,$this->pass,$this->db,$this->port);
      return $cnx;
    }
  }
?>
