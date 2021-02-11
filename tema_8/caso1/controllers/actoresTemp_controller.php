<?php
  include_once 'models/seasonEp_model.php';
  $datos= new seasonEp_model();
  $actores=$datos->getAllCastBySeason();
  include_once 'views/actoresTemp_view.php';
?>
