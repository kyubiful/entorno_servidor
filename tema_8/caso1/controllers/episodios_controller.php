<?php
  include_once 'models/seasonEp_model.php';
  $data=new seasonEp_model();
  $episode=$_POST['number'];
  if($episode){
    $actores=$data->getDataByEpisode($episode);
  }
  include_once 'views/episodios_view.php';
?>
