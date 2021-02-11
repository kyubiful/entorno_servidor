<?php
  class gastos_model extends Connect {
    private $db;
    private $gastos;

    public function __construct(){
      $this->db=Connect::connection();
      $this->gastos=array();
    }

    public function getSumGastosBySem($num){
      $this->gastos=[];
      $query=$this->db->query('SELECT SUM(gasto) as suma FROM gastos WHERE num_semana ='.$num);
      while($rows=$query->fetch_assoc()){
        $this->gastos[]=$rows;
      }
      return $this->gastos;
    }
  }
?>
