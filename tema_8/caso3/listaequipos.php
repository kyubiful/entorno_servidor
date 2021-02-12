<?php
  include_once 'dbNBA.php';
  $data=new Connect();
  $equipos=$data->getAllEquipos();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Equipos</title>
</head>
<body>
  <nav>
    <a href="index.php">Agregar equipo</a>
    <a href="listaequipos.php">Lista de equipos</a>
  </nav>
  <h1>Lista de equipos</h1>
  <table>
  <tr>
    <td>Nombre</td>
    <td>Ciudad</td>
    <td>Conferencia</td>
    <td>División</td>
    <td></td>
  </tr>
  <?php foreach($equipos as $equipo){ ?>
  <tr>
    <?php foreach($equipo as $dato){ ?>
    <td><?php echo $dato ?></td>
    <?php } ?>
    <td><a href="borrarDB.php?nombre=<?php echo $equipo['Nombre'] ?>">Borrar</a></td>
  </tr>
  <?php } ?>
  </table>
</body>
</html>