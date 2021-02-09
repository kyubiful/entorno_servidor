<?php
  include '../tarea2/dbClub.php';
  $datos_jugadores=$mysqli->query("SELECT * FROM jugadores");
  echo '<br/><br/>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tabla jugadores</title>
</head>
<body>
  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Pisición</th>
      <th>Número</th>
      <th>Edad</th>
    </tr>
    <?php
      foreach($datos_jugadores as $jugadores){
    ?>
    <tr>
    <?php
	foreach($jugadores as $jugador){
    ?>
      <td><?php echo $jugador ?></td>
    <?php
	}
    ?>
    </tr>
    <?php
      }
    ?>
  </table>	
</body>
</html>
