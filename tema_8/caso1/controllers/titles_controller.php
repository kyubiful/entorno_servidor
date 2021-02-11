<?php
  include_once 'models/titles_model.php';
  $data = new titles_model();
  $resumen = $data->getAllData();
  include_once 'views/resumen_view.php';
?>
