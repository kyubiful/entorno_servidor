<?php
  class ventas_model extends Connect {
    private $db;
    private $ventas;

    public function __construct(){
      $this->db=Connect::connection();
      $this->ventas=array();
    }

    public function getSumVentasBySem($num){
      $this->ventas=[];
      $query=$this->db->query('SELECT SUM(venta) as suma FROM ventas WHERE num_semana ='.$num);
      while($rows=$query->fetch_assoc()){
        $this->ventas[]=$rows;
      }
      return $this->ventas;
    }
  }
?>
