<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Principal</title>
</head>
<body>
  <nav>
    <a href="index.php">Agregar equipo</a>
    <a href="listaequipos.php">Lista de equipos</a>
  </nav>
  <br/>
  <form action="insertarDB.php" method="post">
    Nombre
    <br/><br/>
    <input type="text" name="nombre" id="">
    <br/><br/>
    Ciudad
    <br/><br/>
    <input type="text" name="ciudad" id="">
    <br/><br/>
    Conferencia
    <br/><br/>
    <input type="text" name="conferencia" id="">
    <br/><br/>
    División
    <br/><br/>
    <input type="text" name="division" id="">
    <br/><br/>
    <input type="submit" value="Añadir">
  </form>	 
</body>
</html>