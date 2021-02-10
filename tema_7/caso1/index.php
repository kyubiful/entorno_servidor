<?php
  $mysqli=new mysqli('localhost','root','root','paises',8889);
  $consulta=$mysqli->query("SELECT * FROM pais;");
  $paises=[];
  while($filas=$consulta->fetch_assoc()){
    $paises[]=$filas;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Paises del mundo</title>
</head>
<body>
  <h1>Paises del mundo</h1>	
  <table border=1>
    <tr>
      <th>Cod</th>
      <th>Nombre</thContinente>
      <th>Continente</th>
    </tr>
    <?php
    foreach($paises as $pais){
    ?>
    <tr>
      <td><?php echo $pais['id'] ?></td>
      <td><?php echo $pais['nombre'] ?></td>
      <td><?php echo $pais['continente'] ?></td>
    </tr>
    <?php
    }
    ?>
  </table>
</body>
</html>
