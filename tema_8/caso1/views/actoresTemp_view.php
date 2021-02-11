<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actores temporadas</title>
</head>
<body>
  <?php include_once 'views/menu_view.php'; ?>	
  <h1>Actores por temporada</h1>
  <table>
    <tr>
    	<th>Nombre</th>
    	<th>Personaje</th>
    	<th>Temporada</th>
    </tr>
    <?php foreach($actores as $actor){ ?>
    <tr>
      <td><?php echo $actor['name']; ?></td>
      <td><?php echo $actor['serie_name']; ?></td>
      <td><?php echo $actor['season']; ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
