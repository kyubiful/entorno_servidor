<?php
  Class cast_model extends Connect {
    private $db;
    private $data;

    public function __construct(){
      $this->db=Connect::connection();
      $this->data=array();      
    }

    public function getAllCast(){
      $this->data=[];
      $query=$this->db->query('SELECT * FROM cast;');
      while($rows=$query->fetch_assoc()){
	$this->data[]=$rows;
      }
      return $this->data;
    }
  }
?>
