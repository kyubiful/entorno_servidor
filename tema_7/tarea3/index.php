<?php
  include '../tarea2/dbClub.php';
  $jugadores=[];
  $consulta=$mysqli->query("SELECT * FROM jugadores");
  while($filas=$consulta->fetch_assoc()){
    $jugadores[]=$filas;
  }
  
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
    foreach($jugadores as $jugador){
    ?>
    <tr>
      <td><?php echo $jugador['Id'] ?></td>
      <td><?php echo $jugador['nombreJugador'] ?></td>
      <td><?php echo $jugador['posición'] ?></td>
      <td><?php echo $jugador['numero'] ?></td>
      <td><?php echo $jugador['edad'] ?></td>
    </tr>
    <?php
      }
    ?>
  </table>	
</body>
</html>
