<?php
  include_once './alumno.php';
  $alumno = new Alumno('Sergio', 29, 'Segundo');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
  <?php $alumno->mostrarDatos(); ?> </br>
  <?php $alumno->esMayorEdad(29); ?>  
</body>
</html>
