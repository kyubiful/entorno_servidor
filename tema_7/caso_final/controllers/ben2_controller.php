<?php
  include_once('models/gastos_model.php');
  include_once('models/ventas_model.php');
  $ventas=new ventas_model();
  $gastos=new gastos_model();
  $ventasOne=$ventas->getSumVentasBySem(2);
  $gastosOne=$gastos->getSumGastosBySem(2);
  $beneficios=$ventasOne[0]['suma']-$gastosOne[0]['suma'];
  include_once('views/ben1_view.php');
?>
