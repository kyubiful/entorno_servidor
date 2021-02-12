<?php
  Class Connect {
    private $ip='localhost';
    private $user='root';
    private $pass='root';
    private $db='nba';
    private $port=8889;
    private $data;
    private $cnx;

    public function __construct(){
      $this->cnx=new mysqli($this->ip,$this->user,$this->pass,$this->db,$this->port);
      $this->data=array();
    }

    public function insertEquipo($nombre,$ciudad,$conferencia,$division){
      $query=$this->cnx->query('INSERT INTO equipos VALUES (\''.$nombre.'\',\''.$ciudad.'\',\''.$conferencia.'\',\''.$division.'\')');
      if(!$query){
        return false;
      }
      return true;
    }

    public function updateEquipo($nombre,$ciudad,$conferencia,$division){
      $query=$this->cnx->query('UPDATE equipos SET ciudad=\''.$ciudad.'\',conferencia=\''.$conferencia.'\',division=\''.$division.'\' WHERE nombre=\''.$nombre.'\'');
      if(!$query){
        return false;
      }
      return true;
    }

    public function deleteEquipo($nombre){
      $query=$this->cnx->query('DELETE FROM equipos WHERE nombre=\''.$nombre.'\'');
      if(!$query){
        return false;
      }
      return true;
    }

    public function getEquipoByName($nombre){
      $this->data=[];
      $query=$this->cnx->query('SELECT * FROM equipos WHERE nombre=\''.$nombre.'\'');
      if(!$query){
        return false;
      }
      while($rows=$query->fetch_assoc()){
        $this->data[]=$rows;
        return $query;
      }
    }

    public function getAllEquipos(){
      $this->data=[];
      $query=$this->cnx->query('SELECT * FROM equipos');
      while($rows=$query->fetch_assoc()){
        $this->data[]=$rows;
      }
      return $this->data;
    }
  }
?>