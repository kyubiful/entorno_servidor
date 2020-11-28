<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Tarea 1</title>
  </head>
  <body>
    <?php
      //Defino las variables
      $name='Thomas Middleditch';
      $age=38;
      $isAlive=true;
    ?>
      <p><?php echo 'El nombre de mi personaje es: '.$name; ?></p>
      <p><?php echo 'La edad de mi personaje es: '.$age; ?></p>
      <p><?php 
	if($isAlive){
	  echo 'Mi personaje está vivo';
	} else {
	  echo 'Mi personaje NO está vivo';
	}
       ?></p>
  </body>
</html>
