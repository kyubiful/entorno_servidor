<?php
  //Hacemos la consulta
  $resultado = $mysqli->query('SELECT * FROM ciudades');
  $ciudades = [];
while($rows = $resultado->fetch_assoc()){
  $ciudades[]=$rows;
}
  //Cuantas filas nos devuelve
  echo 'el número de ciudades es: '.$resultado->num_rows.'</br>';
  //Mostramos por pantalla el resultado de la consulta anterior
  // ....
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
  <table>
    <tr>
      <td>Id</td>
      <td>Nombre Ciudad</td>
      <td>Tamaño</td>
      <td>Habitantes</td>
    </tr>
    <?php foreach($ciudades as $ciudad){ ?>
    <tr>
      <td><?php echo $ciudad['id'] ?></td>
      <td><?php echo $ciudad['nombre'] ?></td>
      <td><?php echo $ciudad['tam'] ?></td>
      <td><?php echo $ciudad['hab'] ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
