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

    public function getPartidosPorEquipo($equipo){
      $this->data=[];
      $query=$this->cnx->query('SELECT * FROM partidos WHERE equipo_local = \''.$equipo.'\'');
      while($rows=$query->fetch_assoc()){
	$this->data[]=$rows;
      }
      return $this->data;
    }

    public function getPartidosPorEquipos($equipo1, $equipo2, $temporada){
      $this->data=[];
      $query=$this->cnx->query('SELECT * FROM partidos WHERE equipo_local = \''.$equipo1.'\' AND equipo_visitante = \''.$equipo2.'\' AND temporada = \''.$temporada.'\'');

      while($rows=$query->fetch_assoc()){
	$this->data[]=$rows;
      }
      return $this->data;
    }  
  }
?>