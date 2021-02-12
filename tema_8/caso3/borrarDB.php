<?php
  include_once 'dbNBA.php';
  $cnx=new Connect();
  $viewData=$_GET;
  $datos=$cnx->deleteEquipo($viewData['nombre']);
  include_once 'index.php';
?>
<p>Registro borrado satisfactoriamente</p>
