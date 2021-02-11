<?php
  require_once('models/ventas_model.php');
  require_once('models/gastos_model.php');
  $datosVentas= new ventas_model();
  $datosGastos= new gastos_model();
  $ventasOne=$datosVentas->getSumVentasBySem(1);
  $ventasTwo=$datosVentas->getSumVentasBySem(2);
  $gastosOne=$datosGastos->getSumGastosBySem(1);
  $gastosTwo=$datosGastos->getSumGastosBySem(2);
  require_once('views/total_view.php');
?>
