<?php
  include_once 'dbNBA.php';
  $cnx=new Connect();
  $viewData=$_POST;
  $datos=$cnx->insertEquipo($viewData['nombre'],$viewData['ciudad'],$viewData['conferencia'],$viewData['division']);
  include_once 'datosRegistroView.php';
?>