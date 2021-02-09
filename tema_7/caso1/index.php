<?php
  $mysqli=new mysqli('localhost','root','root','paises',8889);
  $lista_paises=$mysqli->query("SELECT * FROM pais;");
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
    foreach($lista_paises as $pais){
    ?>
    <tr>
    <?php
      foreach($pais as $datos){
    ?>
      <td><?php echo $datos ?></td>
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
