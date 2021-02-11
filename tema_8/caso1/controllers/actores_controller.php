<?php
  include_once 'models/cast_model.php';
  $data= new cast_model();
  $cast=$data->getAllCast();
  include_once 'views/actores_view.php';
?>
