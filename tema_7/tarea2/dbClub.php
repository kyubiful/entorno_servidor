<?php
  $mysqli = new mysqli('localhost','root','root','ClubBasket',8889);
  
  if ($mysqli->connect_errno){
    echo 'Fallo al conectar a MySQL: ('.$mysqli->connect_errno.')'.$mysqli->connect_error;
  }else{
    echo 'Conexión establecida con éxito <br/>';
    echo $mysqli->host_info;
  }

?>
