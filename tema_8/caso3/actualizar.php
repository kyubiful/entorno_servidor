<?php
  $get=$_GET;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar</title>
</head>
<body>
  <nav>
    <a href="index.php">Agregar equipo</a>
    <a href="listaequipos.php">Lista de equipos</a>
  </nav>
  <form action="actualizaDB.php" method="post">
    Nombre
    <br/><br/>
    <input type="text" name="nombre" id="" value="<?php echo $get['nombre']?>" readonly>
    <br/><br/>
    Ciudad
    <br/><br/>
    <input type="text" name="ciudad" id="" value="<?php echo $get['ciudad']?>">
    <br/><br/>
    Conferencia
    <br/><br/>
    <input type="text" name="conferencia" id="" value="<?php echo $get['conferencia']?>">
    <br/><br/>
    División
    <br/><br/>
    <input type="text" name="division" id="" value="<?php echo $get['division']?>">
    <br/><br/>
    <input type="submit" value="Actualizar">
  </form>	 
</body>
</html>