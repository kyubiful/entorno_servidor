<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos</title>
</head>
<body>
  <nav>
    <a href="index.php">Agregar equipo</a>
    <a href="listaequipos.php">Lista de equipos</a>
  </nav>
  <?php if($datos){ ?>
  <h3>Último registro insertado</h3>
  <p>Nombre: <?php echo $viewData['nombre']; ?></p>
  <p>Ciudad: <?php echo $viewData['ciudad']; ?></p>
  <p>Conferencia: <?php echo $viewData['conferencia']; ?></p>
  <p>División: <?php echo $viewData['division']; ?></p>
  <a href="actualizar.php?nombre=<?php echo $viewData['nombre']?>&ciudad=<?php echo $viewData['ciudad']?>&division=<?php echo $viewData['division']?>&conferencia=<?php echo $viewData['conferencia']?>">Actualizar registro</a><br/>
  <a href="borrarDB.php?nombre=<?php echo $viewData['nombre']?>">Borrar registro</a>
  <?php 
    } else { 
    include_once 'index.php';
  ?>
  <h3>Error, registro duplicado</h3>
  <?php } ?>
</body>
</html>