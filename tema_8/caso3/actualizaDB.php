<?php
  include_once 'dbNBA.php';
  $cnx=new Connect();
  $viewData=$_POST;
  $datos=$cnx->updateEquipo($viewData['nombre'],$viewData['ciudad'],$viewData['conferencia'],$viewData['division']);
  include_once 'datosRegistroView.php';
?>