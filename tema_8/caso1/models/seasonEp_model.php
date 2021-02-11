<?php
  Class seasonEp_model extends Connect{
    private $db;
    private $data;

    public function __construct(){
      $this->db=Connect::connection();
      $this->data=array();
    }

    public function getAllCastBySeason(){
      $this->data=[];
      $query=$this->db->query('SELECT DISTINCT serie_name,name,season FROM season_ep;');
      while($rows=$query->fetch_assoc()){
	$this->data[]=$rows;
      }
      return $this->data;
    }

    public function getDataByEpisode($number){
      $this->data=[];
      $query=$this->db->query('SELECT * FROM season_ep WHERE episode='.$number);
      while($rows=$query->fetch_assoc()){
	$this->data[]=$rows;
      }
      return $this->data;
    }
  }
?>
